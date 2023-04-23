// // alert(1);
// fetch("https://fakestoreapi.com/products/").then((data)=>{
//     // console.log(date);
//     return data.json();// converted to object
// }).then((objectData)=>{
//     //console.log(objectData)
//     console.log(objectData[0].title);
//     let tableData="";
//     objectData.map((values)=>{
//         // tableData =`<h1>${values.title}</h1>`;
//          tableData +=`<tr>
//          <td>${values.title}</td>
//          <td>${values.description}</td>
//          <td>${values.price}</td>
//          <td><img src="${values.image}"/></td>         
//      </tr>`;       
//     });
//     document.getElementById("table_body")
//     .innerHTML=tableData;    
// }).catch((err)=>{
//     console.log(err)
// });
//////////////////////////////////////////////////////////////////
// // alert(1);
// const searchButton = document.getElementById("search-button");
// const searchInput = document.getElementById("search-input");

// searchButton.addEventListener("click", () => {
//     const searchTerm = searchInput.value.trim().toLowerCase();
//     if (searchTerm !== "") {
//         fetch("https://fakestoreapi.com/products/")
//         .then((data) => data.json())
//         .then((objectData) => {
//             const filteredData = objectData.filter((product) => product.title.toLowerCase().includes(searchTerm));
//             let tableData = "";
//             filteredData.forEach((product) => {
//                 tableData += `<tr>
//                     <td>${product.title}</td>
//                     <td>${product.description}</td>
//                     <td>${product.price}</td>
//                     <td><img src="${product.image}"/></td>
//                 </tr>`;
//             });
//             document.getElementById("table_body").innerHTML = tableData;
//         })
//         .catch((err) => {
//             console.log(err);
//         });
//     }
// });
///////////////////////////////////////////////////////////////////////////////////
//  alert(1);
 fetch("https://theaudiodb.com/api/v1/json/2/artist.php?i=112024").then((data)=>{
     console.log(data);// json Format
     return data.json();// converted to object
    }).then((objectData)=>{
            console.log(objectData)// converted to object
            // console.log(objectData[0].artists);
    })
// const searchButton = document.getElementById("search-button");
// const searchInput = document.getElementById("search-input");

// searchButton.addEventListener("click", () => {
//     const searchTerm = searchInput.value.trim().toLowerCase();
//     if (searchTerm !== "") {
//         fetch("https://fakestoreapi.com/products/")
//         .then((data) => data.json())
//         .then((objectData) => {
//             const filteredData = objectData.filter((product) => product.title.toLowerCase().includes(searchTerm));
//             let tableData = "";
//             filteredData.forEach((product) => {
//                 tableData += `<tr>
//                     <td>${product.title}</td>
//                     <td>${product.description}</td>
//                     <td>${product.price}</td>
//                     <td><img src="${product.image}"/></td>
//                 </tr>`;
//             });
//             document.getElementById("table_body").innerHTML = tableData;
//         })
//         .catch((err) => {
//             console.log(err);
//         });
//     }
//  });