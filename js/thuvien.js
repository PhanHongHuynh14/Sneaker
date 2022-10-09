// cài đặt mặc định
document.getElementById("showcart").style.display="none";
var giohang = new Array();
function themvaogiohang(x) {
    var boxsp = x.parentElement.children;
    var img = boxsp[2].children[0].src;
    var gia = boxsp[3].children[1].innerText;
    var tensp = boxsp[4].innerText;
    var soluong = parseInt(boxsp[5].value);
    var sp = new Array(img, gia, tensp, soluong);

    // kiem tra trong gio hang
    var kt = 0;
    for (let i = 0; i < giohang.length; i++) {
        if(giohang[i][4] == tensp){
            kt = 1;
            soluong += parseInt(giohang[i][5]);
            giohang[i][5] = soluong;
            break;
        }
        if(kt == 0){
            giohang.push(sp);
        }
    }
    giohang.push(sp)
    // console.log(giohang)
    showcountsp();
    // lưu giỏ hàng
    sessionStorage.setItem("giohang", JSON.stringify(giohang));
}
function showcountsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}
function showmycart() {
    var ttgh = '';
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = (parseInt(giohang[i][1]) * parseInt(giohang[i][3])*1000);
        tong += tt;
        ttgh += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td><img src="' + giohang[i][0] + '" alt=""> </td>' +
            '<td>' + giohang[i][2] + '</td>' +
            '<td>' + giohang[i][1] + '</td>' +
            '<td>' + giohang[i][3] + '</td>' +
            '<td>' +
            '<p><span>' + tt + '</span><sup><sup>đ</p>' +
            '</td>' +
            '<td>' +
            '<button onclick = "xoasp(this)"> Xóa</button>' +
            '</td>' +
            '</tr>';
    }
    ttgh += '<tr>' +
        '<th colspan="6">Tổng đơn hàng</th>' +
        '<th>' +
        '<p><span>' + tong + '</span><sup><sup>đ</p>' +
        '</th>' +
        '</tr>';
    document.getElementById("mycart").innerHTML = ttgh;  
}
function showcart() {
    var x = document.getElementById("showcart");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block"
        // x.style.overflow="auto";
        // x.style.height="30vh";
    }
    showmycart();
}
function showgiohang_trangthanhtoan() {
    var gh = sessionStorage.getItem("giohang")
    var giohang = JSON.parse(gh);
    var ttgh = '';
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = (parseInt(giohang[i][1]) * parseInt(giohang[i][3])*1000);
        tong += tt;
        ttgh += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td><img src="' + giohang[i][0] + '" alt=""> </td>' +
            '<td>' + giohang[i][2] + '</td>' +
            '<td>' + giohang[i][1] + '</td>' +
            '<td>' + giohang[i][3] + '</td>' +
            '<td>' +
            '<p><span>' + tt + '</span><sup>đ</sup></p>' +
            '</td>' +
            '</tr>';
    }
    ttgh += '<tr>' +
        '<th colspan="5">Tổng đơn hàng</th>' +
        '<th>' +
        '<p><span>' + tong + '</span><sup>đ</sup></p>' +
        '</th>' +
        '</tr>';
    document.getElementById("mycart").innerHTML = ttgh;
}
function xoasp(x){
    //xoa tr
    var tr = x.parentElement.parentElement;
    var tensp = tr.children[2].innerText
    tr.remove();
    for (let i = 0; i < giohang.length; i++) {
        if(giohang[i][2]== tensp){
            giohang.splice(i,1);
        }
    }
    showmycart();
    showcountsp();
}
function xoatatca(){
    giohang = [];
    showmycart();
    showcountsp();
}
function dongydathang() {
    var ttnh = document.getElementById("thongtinnhanhang").children;
    var hoten = ttnh[0].children[1].children[0].value;
    var diachi = ttnh[1].children[1].children[0].value;
    var dienthoai = ttnh[2].children[1].children[0].value;
    var email = ttnh[3].children[1].children[0].value;

    var nguoinhan = new Array(hoten, diachi, dienthoai, email);
    console.log(nguoinhan)
    sessionStorage.setItem("nguoinhan", JSON.stringify(nguoinhan));
    window.location.assign("donhang.html")
}
function showthongtinnguoinhan() {
    var nguoinhan = sessionStorage.getItem("nguoinhan");
    var thongtin = JSON.parse(nguoinhan);

    var tt = '<tr>' +
        '<td width="20%">Họ tên</td>' +
        '<td>' + thongtin[0] +'</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Địa chỉ</td>' +
        '<td>'+ thongtin[1] +'</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Điện thoại</td>' +
        '<td>' + thongtin[2] +'</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Email</td>' +
        '<td>' + thongtin[3] +'</td>' +
        '</tr>';
        document.getElementById("thongtinnhanhang").innerHTML = thongtin;
}

// function search(){
//     var k = document.getElementById("kw");
//     if(k != null){
//         k = k.value
//         var row = document.querySelectorAll("div.row > div.boxsp")
//         for(var i = 0; i < row.length; i++){
//             var a = row[i].getElementsByTagName("h1")[0].innerText;
//             if(a.indexOf(k) >= 0){
//                 row[i].style.outline = "2px dashed red";
//             }
//             setTimeout(function(){
//                 var row = document.querySelectorAll("div.row > div.boxsp")
//                 for(var i = 0; i < row.length; i++)
//                 row[i].style.outline = "none"
//             },1000)
//         }
//     }
// }
// $(document).ready(function(){
//     $("#btnSearch").click(function(){
//         var k = $("kw").value();
//         var row = $("div.boxsp a")
//         for(var i = 0; i < row.length; i++)
//         if($(row[i]).text().indexOf(kw) >= 0)
//         $(row[i]).parent().parent().css("outline","2px dashed red" )
//         setTimeout(function(){
//             $("div.boxsp").css("outline","none")         
//         },1000)
//     })
// })
// // tìm kiếm
// let products = {
//     data: [
//       {
//         productName: "Giày nam",
//         category: "Giaynam",
//         price: "270.000",
//         image: "./Giaynam.jpg",
//       },
//       {
//         productName: "Giày nữ",
//         category: "Giaynu",
//         price: "180.000",
//         image: "./Giaynu.jpg",
//       },
//       {
//         productName: "Giày bé",
//         category: "Giaybe",
//         price: "120.000",
//         image: "Giaytreem.jpg",
//       }
//     ],
//   };

//   for (let i of products.data) {
//     //Create Card
//     let card = document.createElement("div");
//     //Card should have category and should stay hidden initially
//     card.classList.add("card", i.category, "hide");
//     //image div
//     let imgContainer = document.createElement("div");
//     imgContainer.classList.add("image-container");
//     //img tag
//     let image = document.createElement("img");
//     image.setAttribute("src", i.image);
//     imgContainer.appendChild(image);
//     card.appendChild(imgContainer);
//     //container
//     let container = document.createElement("div");
//     container.classList.add("container");
//     //product name
//     let name = document.createElement("h5");
//     name.classList.add("product-name");
//     name.innerText = i.productName.toUpperCase();
//     container.appendChild(name);
//     //price
//     let price = document.createElement("h6");
//     price.innerText = "$" + i.price;
//     container.appendChild(price);

//     card.appendChild(container);
//     document.getElementById("products").appendChild(card);
//   }

//   //parameter passed from button (Parameter same as category)
//   function filterProduct(value) {
//     //Button class code
//     let buttons = document.querySelectorAll(".button-value");
//     buttons.forEach((button) => {
//       //check if value equals innerText
//       if (value.toUpperCase() == button.innerText.toUpperCase()) {
//         button.classList.add("active");
//       } else {
//         button.classList.remove("active");
//       }
//     });

//     //select all cards
//     let elements = document.querySelectorAll(".card");
//     //loop through all cards
//     elements.forEach((element) => {
//       //display all cards on 'all' button click
//       if (value == "all") {
//         element.classList.remove("hide");
//       } else {
//         //Check if element contains category class
//         if (element.classList.contains(value)) {
//           //display element based on category
//           element.classList.remove("hide");
//         } else {
//           //hide other elements
//           element.classList.add("hide");
//         }
//       }
//     });
//   }

//   //Search button click
//   document.getElementById("search").addEventListener("click", () => {
//     //initializations
//     let searchInput = document.getElementById("search-input").value;
//     let elements = document.querySelectorAll(".product-name");
//     let cards = document.querySelectorAll(".card");

//     //loop through all elements
//     elements.forEach((element, index) => {
//       //check if text includes the search value
//       if (element.innerText.includes(searchInput.toUpperCase())) {
//         //display matching card
//         cards[index].classList.remove("hide");
//       } else {
//         //hide others
//         cards[index].classList.add("hide");
//       }
//     });
//   });

//   //Initially display all products
//   window.onload = () => {
//     filterProduct("all");
//   };

