import About from '../Pages/About';
import AU2 from '../Images/About us 2.jpg';
import './AboutBody.css'

export default function AboutBody(){

    return(
        <>


<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1" style={{fontSize: '50px', color: 'black'}}>About Us</h2>
    <p class="lead">Welcome to Smart Delivery – Your Trusted Laundry Delivery Service!</p>
    <p class="lead2" style={{width: '90%'}}>At Smart Delivery, we understand the importance of time and the value of convenience in today's fast-paced world. That's why we've dedicated ourselves to providing you with a seamless and reliable laundry delivery service that takes the hassle out of your laundry routine.</p>
  </div>
  <div class="col-md-5">
  <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src={AU2} alt="500x500 Image" style = {{marginTop: '50px', height: 'auto',width:'1200px'}}/>

  </div>
</div>

        
        </>

    )

}