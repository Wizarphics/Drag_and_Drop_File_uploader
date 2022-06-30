function showFile() {
    let fileType = myFile.type
    let validEx = ['image/jpg', 'image/JPG', 'image/jpeg', "image/JPEG"]
    if (validEx.includes(fileType)) {
        let fileReader = new FileReader()
        fileReader.onload = () => {
            let imgUrl = fileReader.result
            dragBox.innerHTML = `<img src="${imgUrl}" alt="">`
        }
        fileReader.readAsDataURL(myFile)
        fetch('http://localhost:3000/', {
            method: 'post',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',  // sent request
                'Accept': 'application/json'   // expected data sent back
            },
            body: JSON.stringify({min: 1, max: 100})
        })
            .then((res) => res)
            .then((data) => console.log(data))
            .catch((error) => console.log(error))
    } else {
        $("#myModel").modal('show')
        dragBox.classList.remove('active')
        dragText.textContent = "Drag and Drop"
    }
}