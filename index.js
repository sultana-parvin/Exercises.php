

const myField = document.querySelectorAll('#field')

const myBtn = document.getElementById('submit').addEventListener('click', function(){
    // event.preventDefault();

for (let i = 0; i < myField.length; i++){
    if (myField[i].value == ""){
        alert("Please input your data");
    }
    else{
        
    }
}
})