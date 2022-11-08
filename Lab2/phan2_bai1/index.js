document.getElementById("add_tb").addEventListener("click", () => {
  tb = document.getElementById("tb");
  if (tb.childNodes.length == 1) {
    var countRow = 2;
    var countColumn = 2;

    var tagTable = document.createElement("table");

    for (var i = 0; i < countRow; i++) {
      var tagRow = document.createElement("tr");
      tagTable.appendChild(tagRow);

      for (var j = 0; j < countColumn; j++) {
        var tagColumn = document.createElement("td");
        tagColumn.classList.add('border')
        tagColumn.classList.add('p-2')
        var textNode = document.createTextNode(i + " - " + j);
        tagColumn.appendChild(textNode);
        tagRow.appendChild(tagColumn);
      }
    }
    tb.appendChild(tagTable);
  }
});

// document.getElementById("add_row").addEventListener("click", () => {
//   //   var row = document.getElementById("row");
//   //   var column = document.getElementById("column");

//   //   if (row.value.length == 0 || column.value.length == 0) {
//   //     alert("Vui lòng nhập vào số dòng và số cột");
//   //     return false;
//   //   } else if (isNaN(row.value) || isNaN(column.value)) {
//   //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
//   //     return false;
//   //   } else {
//   //     var container = document.getElementById("container");
//   tb = document.getElementById("tb");
//   if (tb.childNodes.length) {
//     var countRow = tb.firstElementChild.childNodes.length + 1;
//     var countColumn = tb.firstElementChild.childNodes[0].childNodes.length;
//     tb.removeChild(tb.firstElementChild)

//     var tagTable = document.createElement("table");
//     for (var i = 0; i < countRow; i++) {
//       var tagRow = document.createElement("tr");
//       tagTable.appendChild(tagRow);

//       for (var j = 0; j < countColumn; j++) {
//         var tagColumn = document.createElement("td");
//         var textNode = document.createTextNode(i + " - " + j);
//         tagColumn.appendChild(textNode);
//         tagRow.appendChild(tagColumn);
//       }
//     }
//     tb.appendChild(tagTable);
//   }
// });
document.getElementById("add_row").addEventListener("click", () => {
  //   var row = document.getElementById("row");
  //   var column = document.getElementById("column");

  //   if (row.value.length == 0 || column.value.length == 0) {
  //     alert("Vui lòng nhập vào số dòng và số cột");
  //     return false;
  //   } else if (isNaN(row.value) || isNaN(column.value)) {
  //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
  //     return false;
  //   } else {
  //     var container = document.getElementById("container");
  tb = document.getElementById("tb");
  if (tb.childNodes.length) {
    var countRow = tb.firstElementChild.childNodes.length;
    var countColumn = tb.firstElementChild.childNodes[0].childNodes.length;
    // tb.removeChild(tb.firstElementChild)

    var tagTable = tb.firstElementChild;
    // for (var i = 0; i < countRow; i++) {
    var tagRow = document.createElement("tr");
    tagTable.appendChild(tagRow);

    for (var j = 0; j < countColumn; j++) {
      var tagColumn = document.createElement("td");
      tagColumn.classList.add('border')
        tagColumn.classList.add('p-2')
      var textNode = document.createTextNode(countRow + " - " + j);
      tagColumn.appendChild(textNode);
      tagRow.appendChild(tagColumn);
    }
  }
  // tb.appendChild(tagTable);
  //   }
});

document.getElementById("add_col").addEventListener("click", () => {
  //   var row = document.getElementById("row");
  //   var column = document.getElementById("column");

  //   if (row.value.length == 0 || column.value.length == 0) {
  //     alert("Vui lòng nhập vào số dòng và số cột");
  //     return false;
  //   } else if (isNaN(row.value) || isNaN(column.value)) {
  //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
  //     return false;
  //   } else {
  //     var container = document.getElementById("container");
  tb = document.getElementById("tb");
  if (tb.childNodes.length) {
    var countRow = tb.firstElementChild.childNodes.length;
    var countColumn = tb.firstElementChild.childNodes[0].childNodes.length;
    // tb.removeChild(tb.firstElementChild)

    var tagTable = tb.firstElementChild;
    for (var i = 0; i < countRow; i++) {
      var tagRow = tagTable.childNodes[i];
      // tagTable.appendChild(tagRow);

      // for (var j = 0; j < countColumn; j++) {
      var tagColumn = document.createElement("td");
      tagColumn.classList.add('border')
        tagColumn.classList.add('p-2')
      var textNode = document.createTextNode(i + " - " + countColumn);
      tagColumn.appendChild(textNode);
      tagRow.appendChild(tagColumn);
      // }
    }
    // tb.appendChild(tagTable);
  }
});
document.getElementById("del_row").addEventListener(
  "click",
  () => {
    //   var row = document.getElementById("row");
    //   var column = document.getElementById("column");

    //   if (row.value.length == 0 || column.value.length == 0) {
    //     alert("Vui lòng nhập vào số dòng và số cột");
    //     return false;
    //   } else if (isNaN(row.value) || isNaN(column.value)) {
    //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
    //     return false;
    //   } else {
    //     var container = document.getElementById("container");
    tb = document.getElementById("tb");
    var countRow = document.getElementById("row").value;
    var countColumn = tb.firstElementChild.childNodes[0].childNodes.length;
    // tb.removeChild(tb.firstElementChild)

    var tagTable = tb.firstElementChild;
    // for (var i = 0; i < countRow; i++) {
    // var tagRow = document.createElement("tr");
    tagTable.removeChild(tagTable.childNodes[countRow]);

    // for (var j = 0; j < countColumn; j++) {
    //   var tagColumn = document.createElement("td");
    //   var textNode = document.createTextNode(countRow + " - " + j);
    //   tagColumn.appendChild(textNode);
    //   tagRow.appendChild(tagColumn);
    // }
  }
  // tb.appendChild(tagTable);
  //   }
);

document.getElementById("del_col").addEventListener("click", () => {
  //   var row = document.getElementById("row");
  //   var column = document.getElementById("column");

  //   if (row.value.length == 0 || column.value.length == 0) {
  //     alert("Vui lòng nhập vào số dòng và số cột");
  //     return false;
  //   } else if (isNaN(row.value) || isNaN(column.value)) {
  //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
  //     return false;
  //   } else {
  //     var container = document.getElementById("container");
  tb = document.getElementById("tb");
  var countRow = tb.firstElementChild.childNodes.length;
  var countColumn = document.getElementById("col").value;
  // tb.removeChild(tb.firstElementChild)

  var tagTable = tb.firstElementChild;
  for (var i = 0; i < countRow; i++) {
    var tagRow = tagTable.childNodes[i];
    // tagTable.appendChild(tagRow);

    // for (var j = 0; j < countColumn; j++) {
    tagRow.removeChild(tagRow.childNodes[countColumn]);
    // // var textNode = document.createTextNode(i + " - " + countColumn);
    // tagColumn.appendChild(textNode);
    // tagRow.appendChild(tagColumn);
    // }
  }
  // tb.appendChild(tagTable);
});
document.getElementById("del_tb").addEventListener("click", () => {
    //   var row = document.getElementById("row");
    //   var column = document.getElementById("column");
  
    //   if (row.value.length == 0 || column.value.length == 0) {
    //     alert("Vui lòng nhập vào số dòng và số cột");
    //     return false;
    //   } else if (isNaN(row.value) || isNaN(column.value)) {
    //     alert("Vui lòng nhập giá trị số cho số dòng và số cột");
    //     return false;
    //   } else {
    //     var container = document.getElementById("container");
    tb = document.getElementById("tb");
    // var countRow = tb.firstElementChild.childNodes.length;
    // var countColumn = document.getElementById("col").value;
    // tb.removeChild(tb.firstElementChild)
  
    // var tagTable = tb.firstElementChild;
    tb.removeChild(tb.firstElementChild)
  });
