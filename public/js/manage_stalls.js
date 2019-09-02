  
  function get(){    
    var table = document.getElementById('datas');
    var category = document.getElementById('stall_category');
    var address = document.getElementById('stall_address');

    for(var i = 0; i < table.rows.length; i++){
      console.log(category.value + " " + address.value);
      if(category.value != 'all'){
        if(table.rows[i].cells[2].id != category.value){
          table.rows[i].style.display = 'none';
        }
      }
      else{
        if(table.rows[i].cells[3].id == address.value){
          table.rows[i].style.display = null;
        }
      }
      if(address.value != 'all'){
        if(table.rows[i].cells[3].id != address.value){
          table.rows[i].style.display = 'none';
        }
      }
      else{
        if(table.rows[i].cells[2].id == category.value){
          table.rows[i].style.display = null;
        }
      }
      if(category.value == 'all' && address.value == 'all'){
        table.rows[i].style.display = null;
      }
    }
  }