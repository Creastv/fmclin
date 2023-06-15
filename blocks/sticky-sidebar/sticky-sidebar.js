// let menuSection = document.querySelectorAll(".sticky-nav li");

// // for clickable event
// menuSection.forEach((v) => {
//   v.onclick = () => {
//     setTimeout(() => {
//       menuSection.forEach((j) => j.classList.remove("active"));
//       v.classList.add("active");
//     }, 300);
//   };
// });

// // for window scrolldown event

// window.onscroll = () => {
//   let mainSection = document.querySelectorAll(".anchor");

//   mainSection.forEach((v, i) => {
//     let rect = v.getBoundingClientRect().y;
//     if (rect < window.innerHeight - 300) {
//       menuSection.forEach((v) => v.classList.remove("active"));
//       menuSection[i].classList.add("active");
//     }
//   });
// };

// let menuSection = document.querySelectorAll(".sticky-nav li");
// let mainSection = document.querySelectorAll(".anchor ");
// // for clickable event
// if (mainSection.length > 0) {
//   menuSection.forEach((v) => {
//     v.onclick = () => {
//       setTimeout(() => {
//         menuSection.forEach((j) => j.classList.remove("active"));
//         v.classList.add("active");
//       }, 100);
//     };
//   });

//   // for window scrolldown event
//   document.onscroll = () => {
//     mainSection.forEach((v, i) => {
//       let rect = v.getBoundingClientRect().y;
//       if (rect < window.innerHeight - 1000) {
//         menuSection.forEach((v) => v.classList.remove("active"));
//         menuSection[i].classList.add("active");
//       }
//     });
//   };
// }
