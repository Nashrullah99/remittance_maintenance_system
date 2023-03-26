// const transactionbtn = document.querySelector(".transaction-btn");
//   const content = document.querySelector(".content");
//   transactionbtn.addEventListener("click", function () {
//     content.classList.toggle('active');
//   });

  const adminbtns = document.querySelectorAll(".transaction-btn");
  const contents = document.querySelectorAll(".contentt");
  adminbtns.forEach(btn =>{
    btn.addEventListener("click", function (e) {
      const id = e.target.dataset.id;
      console.log(id);
      if (id) {
        contents.forEach(function (content) {
          content.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.toggle("active");
      }
    });
  });

    