function on(){
  alert('Connected');
}
function warnempty(){
  alert('Enter contents');
}
function dateToString(date){
  const dateString=date.toISOString();
  const date_string=dateString.substring(0,10)+""+dateString(11,19);
  return date_string;
}

function submitReview(){
  const newreviewEL=document.getElementById("new_review");
  const newreview=newreviewEL.value.trim();

  if(newreview){
    const contentEL=document.createElement("div");
    dateEL.classList.add("review_content");
    dateEL.innerText= newreview;

    const contentEL=document.createElement("div");
    dateEL.classList.add("review_date");
    const dateString =dateToString(new Date());
    dateEL.innerText=dateString;

    const contentEL=document.createElement("div");
    dateEL.classList.add("review_row");
    reviewEL.appendChild(dateEL);
    reviewEL.appendChild(contentEL);

    document.getElementById('review').appendChild(reviewEL);
    newreviewEL.value="";

  }
  else {
    warnempty();
  }
}
