@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Kalender Akademik FATERNA</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Kalender Akademik</li>
      </ol>
      <section id="kalender-pendidikan" >
        <div style="margin: 0" class="row">
         <h1>Kalender Akademik</h1>
         <p>Fakultas Peternakan Universitas Andalas</p>
        </div>
        <div class="row">
        <div class="col-md-8 d-flex justify-content-end">  <div class="wrapper">
          <header>      
            <div class="icons">
              <img id="prev" class="material-symbols-rounded" src="{{asset('assets/img/previous.svg')}}" alt="Previous">
              <p class="current-date"></p>
              <img id="next" class="material-symbols-rounded" src="{{asset('assets/img/next.svg')}}" alt="Next">
            </div>
          </header>
          <div class="calendar">
            <ul class="weeks">
              <li>Sun</li>
              <li>Mon</li>
              <li>Tue</li>
              <li>Wed</li>
              <li>Thu</li>
              <li>Fri</li>
              <li>Sat</li>
            </ul>
            <ul class="days"></ul>
          </div>
        </div></div>
        <div class="col-md-4 d-flex keterangan justify-content-center flex-column">
          <div class="row keterangan-header mb-2">Keterangan : </div>
         <div class="col-md-5 mb-2 d-flex flex-row">
          <div class="ket-warna"></div>
            <p class="ms-2" >: Hari Ini</p>
         </div>
         <div class="col-md-5 d-flex flex-row">
          <div class="ket-warna2"></div>
            <p class="ms-2" >: Hari Penting</p>
         </div>
          
        
  
  </div>
      </section>
      </div>
    </div>
  </nav>
</div>


<section id="faq" class="faq" data-aos="fade-up">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kalender Akademik</h2>
    </div>
    <div class="post-content">
      <table width="100%">
        <tbody width="100%">
            <tr>
              <td width="5%" >No</td>
              <td width="20%" >Judul</td>
              <td width="20%" >Link Download</td>
            </tr>
            <tr>
              <td width="5%" >1</td>
              <td width="20%" >Ganjil 2023/2024</td>
              <td width="20%" ><a href="#">Download</a></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>  

  </div>
</section>


<script>
  const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons img");

// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});
</script>
@endsection

