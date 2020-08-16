function lectureLinkHandler() {
    this.event.preventDefault();
  var lecture_list = document.querySelectorAll(".link");
  lecture_list.forEach((lecture) => {
    lecture.addEventListener("click", (e) => {
      var src = lecture.firstChild.getAttribute("href");
      var iframe = document.getElementById("video");
      iframe.setAttribute("src", src);
    });
  });
};
