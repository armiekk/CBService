// $( document ).ready(getProducts());

function getProducts() {
    var parser = new DOMParser();
    $.ajax({
      url: "../CBService/api/products.php",
      type: "GET",
      success: function(result){
        try {
          xmlDoc = parser.parseFromString(result,"text/xml");
          // console.log(xmlDoc);

          var prodRow = "";

          var productsNum = xmlDoc.getElementsByTagName("product").length;
          var prodsId = xmlDoc.getElementsByTagName("id");
          var prodsName = xmlDoc.getElementsByTagName("name");
          var prodsPrice = xmlDoc.getElementsByTagName("price");
          var prodsQty = xmlDoc.getElementsByTagName("qty");

          for(var i=0 ;i < productsNum;i++){
              prodRow += "<tr>"+
                "<td>"+prodsId[i].childNodes[0].nodeValue+"</td>"+
                "<td>"+prodsName[i].childNodes[0].nodeValue+"</td>"+
                "<td>"+prodsQty[i].childNodes[0].nodeValue+"</td>"+
                "<td>"+prodsPrice[i].childNodes[0].nodeValue+"</td>"+
                '<td><button onclick="addProduct('+prodsId[i].childNodes[0].nodeValue+')">เพิ่มสินค้าในรายการสั่งซื้อ</button></td>'+
              "</tr>";
          }
          document.getElementById("prodRow").innerHTML = prodRow;
        } catch (e) {
          console.log("Error to get data.", e);
          document.getElementById("prodRow").innerHTML = '<tr><td colspan="5">ไม่มีสินค้าในคลัง</td></tr>';
        }
      }
    });
}

function searchProduct() {
    var searchValue = document.getElementById("search").value;
    if (searchValue.length == 0) {
      alert("กรุณาป้อนข้อมูลสินค้า");
      return;
    }else {
      var parser = new DOMParser();

      $.ajax({
        url: "../CBService/api/search.php",
        type: "POST",
        data:{
          search: searchValue
        },
        success: function(result){

          try{
              xmlDoc = parser.parseFromString(result,"text/xml");

              if(xmlDoc.getElementsByTagName('err').length > 0)
                throw 'Error';

              console.log(xmlDoc);

              var prodRow = "";

              var productsNum = xmlDoc.getElementsByTagName("product").length;
              var prodsId = xmlDoc.getElementsByTagName("id");
              var prodsName = xmlDoc.getElementsByTagName("name");
              var prodsPrice = xmlDoc.getElementsByTagName("price");
              var prodsQty = xmlDoc.getElementsByTagName("qty");


              for(var i=0 ;i < productsNum;i++){
                  prodRow += "<tr>"+
                    "<td>"+prodsId[i].childNodes[0].nodeValue+"</td>"+
                    "<td>"+prodsName[i].childNodes[0].nodeValue+"</td>"+
                    "<td>"+prodsQty[i].childNodes[0].nodeValue+"</td>"+
                    "<td>"+prodsPrice[i].childNodes[0].nodeValue+"</td>"+
                    '<td><button onclick="addProduct('+prodsId[i].childNodes[0].nodeValue+')">เพิ่มสินค้าในรายการสั่งซื้อ</button></td>'+
                  "</tr>";
              }
              document.getElementById("prodRow").innerHTML = prodRow;
          } catch(err) {
              console.log(err);
              document.getElementById("prodRow").innerHTML = '<tr><td colspan="5">ไม่พบสินค้าที่ต้องการ</td></tr>';
          }
        }
      });
    }
}

$(function(){
  $('form.register-form').on("submit", function(e){
    console.log("submit");
    console.log($("form.login-form").serialize());
    e.preventDefault();

    $.ajax({
      type: 'get',
      url: '../CBService/api/user.php',
      data: $("form.register-form").serialize()+"&function=register",
      success: function(result){
        alert(result);
      }
    });
  });
});

function addProduct(prodsId){
  alert("add product "+prodsId);
}
