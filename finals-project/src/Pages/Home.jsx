import './Home.css';
import React from 'react';
import { Link } from 'react-router-dom';
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
import SU from '../Images/sign-up.png'
import SE from '../Images/select.png'
import PU from '../Images/pickup.png'
import TO from '../Images/track order.png'
import STable from '../Components/ServicesTable'
import RC from '../Images/receive.png'
import LM from '../Images/laundry-machine.png'

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
                <h1 className="carousel-caption-text">Laundry Management <br />Service</h1>
                <p className="carousel-paragraph-text">Freshness Brought to You</p>
                <Link to="/services"> <button type="button" className="custom-btn"> Explore More </button> </Link> 
             </div>
            </div>
            <div className="carousel-item">
                    <img src={home2} className="d-block w-100" alt="Slide 2" />
                      <div className="carousel-content">
                        <h1 className="carousel-caption-text">Laundry Delivery <br/>Service</h1>
                        <p className="carousel-paragraph-text">Freshness Brought to You</p>
                        <Link to="/services"> <button type="button" className="custom-btn"> Explore More </button> </Link> 
                  </div>
                  </div>
                  <div className="carousel-item">
                    <img src={home3} className="d-block w-100" alt="Slide 3" />
                    <div className="carousel-content">
                        <h1 className="carousel-caption-text">Laundry Delivery <br/>Service</h1>
                        <p className="carousel-paragraph-text">Freshness Brought to You</p>
                        <Link to="/services"> <button type="button" className="custom-btn"> Explore More </button> </Link> 
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
            <h2 style= {{color: '#116A7B'}}>Welcome to Smart Wash</h2>
            <h2 style={{textAlign: 'center',marginLeft: '-75px', marginTop: '30px', color: '#424242'}}>Your Gateway to Seamless <br/>Service!</h2>
            <p style = {{fontSize: '25px'}}>At Smart Wash, we are delighted to extend a warm welcome to you. Step into a world of convenience, where your needs are our top priority. Whether it's swift and reliable delivery or tailored services, we're here to redefine your experience. Explore the possibilities with Smart Delivery – where excellence meets efficiency.</p>
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
       
        <div class="black-card" style ={{marginLeft: '-20px'}}>
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
              <h2>Schedule Your Dropoff Now!</h2>
              <p>Discover the ease of Smart Wash - 
where your laundry needs meet efficiency. Join us on a journey to fresher, cleaner clothes without the hassle.</p>
             <a href="/contact-us" className="custom-btn1" style={{marginTop: '120px', marginLeft: '50px',width:'30%',textDecoration: 'none' }}> Get Started</a>
             <a href="/about" className="custom-btn1" style={{marginTop: '-50px',marginLeft: '375px',width:'30%',textDecoration: 'none' }}> Learn More</a>
            
          </div>
        </div>
      </div>
      <div className = "fourthL">
              <h1>How We Work</h1>
                    <div className ="body3">
                        <div class="container3">
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                    <img src ={SU} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p>Input your information with us</p>
                            </div>
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={SE} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p>Select Your Service</p>
                            </div>
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={LM} style ={{height: '100px',marginLeft: '-20px'}}/>
                                </div>
                            </div>
                            <p>We Take Care Of The Rest</p>
                            </div>
                           
                        
                    </div>

                    <div class="container4">

                            <div class="circCard2" style ={{marginLeft: '15%'}}>
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={TO} style ={{height: '100px',marginLeft: '15px'}}/>
                                </div>
                            </div>
                            <p style ={{marginLeft: '-40px'}}>Get notified about your laundry</p>
                            </div>
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={RC} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p style ={{marginLeft: '-20px',width:'70%'}}>Receive Neatly Folded Laundry</p>
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
              <p> “Being a detail-oriented person, I have high standards for myself. Smart Wash not only meets but exceeds those standards. From the precision in handling delicate fabrics to the seamless delivery, they’ve earned my trust. Smart Wash is my go-to laundry service.”</p>
            </div>
          </div>
          <div className = "plaque">
            <div className = "innerPlaque">
            <img src ={emily}/>
              <h3>Emily T.</h3>
              <p>“Smart Wash has been a game-changer for me! As a busy professional, I don’t have time for laundry. With their efficient service, I can focus on my work while they take care of my clothes. Plus, the freshness of my garments when they return is unmatched. Highly recommend!” </p>
           
            </div>
          </div>
          <div className = "plaque">
            <div className = "innerPlaque">
            <img src ={michael}/>
              <h3>Michael S.</h3>
              <p> “I was skeptical about laundry delivery services, but Smart Wash exceeded my expectations. From the easy scheduling to the punctual delivery, everything was seamless. My clothes look and smell amazing. It’s like having a laundry fairy at my service!”</p>
           
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
