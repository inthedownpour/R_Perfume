function warnempty(){
  alert('Enter contents');
}

function submitReview(){
  const newreviewEL=document.getElementById('new_review').value;
//  document.getElementByClassName("review_content").innerText = newreviewEL;

//alert("good");
  if(newreviewEL){
    //class가 review_content인 div만듬
    const contentEL=document.createElement("div");
    //문자열 전달
    contentEL.innerText= newreviewEL;
    contentEL.classList.add('review_row');
    document.getElementById('write_coment').appendChild(contentEL);
/*
    const contentEL=document.createElement("div");
              //문자열 전달
    contentEL.innerText= newreviewEL;
    contentEL.classList.add('review_row');
    document.getElementById('write_coment').appendChild(contentEL);
*/
    const dateEL=document.createElement("div");
    const today =new Date();
    const dateString=today.toLocaleString();
    dateEL.classList.add('review_date');
    dateEL.innerText=dateString;
    document.getElementById('dateset').appendChild(dateEL);
  }
  else {
    warnempty();
  }
  }
