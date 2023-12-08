import './Home.css';
import home1 from '../Images/home1.png'
import home2 from '../Images/home2.png'
import home3 from '../Images/home3.png'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import homeb1 from '../Images/homeb1.png'
import delivery from '../Images/delivery.png'
import WDF from '../Images/laundry-basket.png'
import DC from '../Images/dry-cleaning.png'
import blanket from '../Images/blanket.png'
import Navbar from '../Components/Navbar'
import yuki from '../Images/yuki.png'
import emily from '../Images/emily.png'
import michael from '../Images/michael.png'
import Footer from '../Components/Footer'

export default function Home() {
  return (
    <>
      <Navbar/>
      <div className='firstH'>
        <div id="carouselExampleControls" className="carousel slide" data-bs-ride="carousel" style={{zIndex: '1'}} data-bs-interval="3000">
          <div className="carousel-inner">
            <div className="carousel-item active">
              <img src={home1} className="d-block w-100" alt="Slide 1" style={{zIndex: '1'}}/>
              <div className="carousel-content">
                <h1 className="carousel-caption-text">Laundry Delivery <br />Service</h1>
                <p className="carousel-paragraph-text">Freshness Delivered to Your Doorstep</p>
                <button type="button" className="custom-btn">Explore More</button>
              </div>
            </div>
            <div className="carousel-item">
                    <img src={home2} className="d-block w-100" alt="Slide 2" />
                      <div className="carousel-content">
                        <h1 className="carousel-caption-text">Laundry Delivery <br/>Service</h1>
                        <p className="carousel-paragraph-text">Freshness Delivered to Your Doorstep</p>
                        <button type="button" className="custom-btn">Explore More</button>
                      </div>
                  </div>
                  <div className="carousel-item">
                    <img src={home3} className="d-block w-100" alt="Slide 3" />
                    <div className="carousel-content">
                        <h1 className="carousel-caption-text">Laundry Delivery <br/>Service</h1>
                        <p className="carousel-paragraph-text">Freshness Delivered to Your Doorstep</p>
                        <button type="button" className="custom-btn">Explore More</button>
                      </div>  
                  </div>
          </div>
          <div className="carousel-controls-container">
            <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span className="carousel-control-icon" aria-hidden="true">&lt;</span>
              <span className="visually-hidden">Previous</span>
            </button>
            <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span className="carousel-control-icon" aria-hidden="true">&gt;</span>
              <span className="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div className= "second">
      <div className="secondOne">
          <div className='left'>
            <h2 style= {{color: '#116A7B'}}>Welcome to Smart Delivery</h2>
            <h2 style={{textAlign: 'center',marginLeft: '-75px', marginTop: '30px', color: '#424242'}}>Your Gateway to Seamless <br/>Service!</h2>
            <p style = {{fontSize: '25px'}}>At Smart Delivery, we are delighted to extend a warm welcome to you. Step into a world of convenience, where your needs are our top priority. Whether it's swift and reliable delivery or tailored services, we're here to redefine your experience. Explore the possibilities with Smart Delivery – where excellence meets efficiency.</p>
            <div className = "check">
            <h2 style = {{marginLeft: '20px',marginTop: '50px'}}><span class="checkmark" style ={{color: 'black', fontWeight: 'bold'}}>&#10003;</span>Quality</h2>
            <h2 style = {{marginTop: '-45px', marginLeft: '250px'}}><span class="checkmark" style ={{color: 'black', fontWeight: 'bold'}}>&#10003;</span>Convenience</h2>
            <h2 style = {{marginTop: '40px'}}><span class="checkmark" style ={{color: 'black', fontWeight: 'bold'}}>&#10003;</span>Reliability</h2>
            <h2 style = {{marginLeft: '250px',marginTop: '-45px'}}><span class="checkmark" style ={{color: 'black', fontWeight: 'bold'}}>&#10003;</span>Innovation</h2>
            </div>
          </div>
          <div className='right'>
          <img src={homeb1} className="rightImg" alt="Slide 1" />
          </div>
      </div>
      <div className="secondTwo">
        <h1>Our Services</h1>
        <h2>What We Offer</h2>
        <div class="black-card">
          <div class = "cardbg">
          <img src = {delivery} />
          </div>
          
          <p class="background-text">Pickup & Delivery</p>
        </div>
        <div class="black-card">
          <div class = "cardbg">
          <img src = {WDF} />
          </div>
         
          <p class="background-text">Wash, Dry & Fold</p>
        </div>
        <div class="black-card">
          <div class = "cardbg">
          <img src = {DC} />
          </div>
          <p class="background-text">Dry Cleaning</p>
        </div>
        <div class="black-card">
          <div class = "cardbg">
          <img src = {blanket} />
          </div>
          
          <p class="background-text">Heavy Fabrics</p>
        </div>
      </div>
      </div>
      <div className='thirdL'>
        <div className='tRight'>
          <h1>Experience the Ultimate in Laundry Delivery Services</h1>
          <p>Say goodbye to laundry stress and hello to convenience. Let Smart Delivery take care of your garments with precision and care.</p>
        </div>
        <div className= 'tLeft'>
          <div className='whiteCard'>
              <h2>Schedule Your First Pickup Now!</h2>
              <p>Discover the ease of Smart Delivery - 
where your laundry needs meet efficiency. Join us on a journey to fresher, cleaner clothes without the hassle.</p>
          <button type="button" className="custom-btn1" style={{marginTop: '120px', marginLeft: '50px'}}>Get Started</button>
          <button type="button" className="custom-btn1" style={{marginTop: '-48px', marginLeft: '400px'}}>Learn More</button>
          </div>
        </div>
      </div>
      <div className = "fourthL">
        <h1>How We Work</h1>
        <h2>Working Process</h2>
          <div className ="body4">
             <div class="container1">
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>1</h1>
                    </div>
                  </div>
                  <p>Schedule Your Pickup</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>2</h1>
                    </div>
                  </div>
                  <p>Garment Assessment</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>3</h1>
                    </div>
                  </div>
                  <p>Tailored Cleaning Process</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>4</h1>
                    </div>
                  </div>
                  <p>Quality Control</p>
                </div>
               
            </div>

           <div class="container2">
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>5</h1>
                    </div>
                  </div>
                  <p>Real-Time Tracking</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>6</h1>
                    </div>
                  </div>
                  <p>Packaging & Delivery</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>7</h1>
                    </div>
                  </div>
                  <p>Feedback & Support</p>
                </div>
                <div class="circCardH">
                  <div class="circleH">
                    <div class="innerCircH">
                      <h1>8</h1>
                    </div>
                  </div>
                  <p>Repeat or Customize</p>
                </div>
               
            </div>

          </div>
      </div>


      <div className = "fifthL">
      <h1 style={{ marginTop: '-50px' }}>How We Work</h1>

        <h2>Working Process</h2>

        <div className = "fBody">
          <div className = "plaque">
            <div className = "innerPlaque">
              <img src ={yuki}/>
              <h3>Yuki S.</h3>
              <p>“Being a detail-oriented person, I have high standards for myself. Smart Delivery not only meets but exceeds those standards. From the precision in handling delicate fabrics to the seamless delivery, they’ve earned my trust. Smart Delivery is my go-to laundry service.”</p>
            </div>
          </div>
          <div className = "plaque">
            <div className = "innerPlaque">
            <img src ={emily}/>
              <h3>Emily T.</h3>
              <p>“Smart Delivery has been a game-changer for me! As a busy professional, I don’t have time for laundry. With their efficient service, I can focus on my work while they take care of my clothes. Plus, the freshness of my garments when they return is unmatched. Highly recommend!” </p>
           
            </div>
          </div>
          <div className = "plaque">
            <div className = "innerPlaque">
            <img src ={michael}/>
              <h3>Michael S.</h3>
              <p>“I was skeptical about laundry delivery services, but Smart Delivery exceeded my expectations. From the easy scheduling to the punctual delivery, everything was seamless. My clothes look and smell amazing. It’s like having a laundry fairy at my service!”</p>
           
            </div>
          </div>
        </div>
      </div>
      <div className='seventh'>
      <Footer/>
      </div>
      
    </>
  );
}
