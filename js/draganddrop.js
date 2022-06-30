const dragArea = document.getElementById('dragArea')
dragBox = document.querySelector('.dragBox')
dragText = document.querySelector('.dragText')
inputFile = document.querySelector('#fileInput')
browseButton = document.querySelector('#browseButton')
const resizerArea = document.querySelector('#resizerDiv')
resizerImageView = document.querySelector('#resizerImageView')
resizerForm = document.querySelector('#resizerForm')
let imgTag;


let myFile

let resizerContent;

browseButton.onclick = () => {
    inputFile.click()
}

inputFile.addEventListener('change', function () {
    myFile = this.files[0]
    dragBox.classList.add('active')
    /*showFile()*/
    propagate('resizerDiv', resizerContent)
})

dragArea.addEventListener('dragover', (e) => {
    e.preventDefault()
    dragBox.classList.add('active')
    dragText.textContent = "Release to upload to upload file"
})

dragArea.addEventListener('dragleave', (e) => {
    dragBox.classList.remove('active')
    dragText.textContent = "Drag and Drop"
})

dragArea.addEventListener('drop', (e) => {
    e.preventDefault()
    dragBox.classList.add('active')
    myFile = e.dataTransfer.files[0]
    /*showFile()*/
    propagate('resizerDiv', resizerContent)
})


function propagate(elementId, content) {
    let fileType = myFile.type
    let validEx = ['image/jpg', 'image/JPG', 'image/jpeg', "image/JPEG"]
    if (validEx.includes(fileType)) {
        let fileReader = new FileReader()
        fileReader.onload = () => {
            let imgUrl = fileReader.result
            imgTag = ` <img src="${imgUrl}" id="imgPrev" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">`;
            /*<div className="container col-xxl-8 px-4 py-5" id="resizerDiv"></div>*/
            resizerContent = `<div class="row flex-lg-row align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6 imgPrevDiv">  
    ${imgTag}
    </div> 
    <div class="col-md-10 mx-auto col-lg-5"> 
   <form class="p-4 p-md-5 border rounded-3 bg-light">
    <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
     <label htmlFor="floatingInput">Email address</label>  
    </div> 
    <div class="form-floating mb-3">  
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> 
    <label htmlFor="floatingPassword">Password</label>  
     </div>
     <div class="checkbox mb-3">  
     <label>
     <input type="checkbox" value="remember-me"> Remember me </label>  
    </div>  
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>  
    <hr class="my-4">  
    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>  
    </form>
     </div>  
     </div>`
            let getDiv = document.getElementById(elementId)
            let answer = getDiv.hasChildNodes();
            if (answer === true) {
                const resizer = document.createElement("resizer-div")
                resizer.innerHTML = resizerContent
                getDiv.insertBefore(resizer, getDiv.children[0])
                let ID = '#'.concat(elementId)
                //For a smooth scroll using jQuery animate
                dragBox.classList.remove('active')
                let element = getDiv.children[0]
                getDiv.scrollIntoView();
            } else {
                const resizer = document.createElement("resizer-div")
                resizer.innerHTML = resizerContent
                getDiv.appendChild(resizer)
                let ID = '#'.concat(elementId)
                dragBox.classList.remove('active')
                getDiv.scrollIntoView(false);
            }
            dragBox.classList.remove('active')
        }
        fileReader.readAsDataURL(myFile)

    } else {
        $("#myModel").modal('show')
        dragBox.classList.remove('active')
        dragText.textContent = "Drag and Drop"
    }
}
