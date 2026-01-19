var add = document.getElementById('add-btn')
var t = document.getElementById('display')

var row = 1
add.onclick = function () {

    const username = document.getElementById('username').value
    const email = document.getElementById('email').value
    

    if (username != '' && email != '') {
        var values = []
        var selected_value = document.querySelectorAll('input[type="checkbox"]:checked')
        Array.from(selected_value).forEach(function (e) {
            values.push(e.value)
        })

        const description = `<p><strong>Name:</strong> ${username}<br><br><strong>Furnished:</strong> ${document.querySelector('input[type="radio"]:checked').value}
        <br><strong>Room Type:</strong> ${values.join(', ')}</p>
        `
        var newRow = t.insertRow(row)

        var cell1 = newRow.insertCell(0)
        var cell2 = newRow.insertCell(1)

    

        cell1.innerHTML = description
    

        row++
        document.getElementById('input-form').reset()
        username = email = ''
    }
    else {
        alert('Please fill all the fields')
    }
}

document.getElementById('delete-btn').onclick = function () {
    if (row != 1) {
        console.log(row)
        row--
        t.deleteRow(row)
    }
    else
        return
}

let digitValidate = function(ele){
    console.log(ele.value);
    ele.value = ele.value.replace(/[^0-9]/g,'');
  }
  
  let tabChange = function(val){
      let ele = document.querySelectorAll('input');
      if(ele[val-1].value != ''){
        ele[val].focus()
      }else if(ele[val-1].value == ''){
        ele[val-2].focus()
      }   
   }
    
  