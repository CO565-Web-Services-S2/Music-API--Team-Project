
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