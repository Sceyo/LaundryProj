import Navbar from '../Components/Navbar'
import Footer from '../Components/Footer'
import './Reviews.css'
import yuki from '../Images/yuki.png'
import emily from '../Images/emily.png'
import michael from '../Images/michael.png'
import React, { useEffect } from 'react';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';




export default function Reviews(){
   
    return(
        <>
        <Navbar/>
        <div className ="firstR">
                    <h1>Rave Reviews</h1>
               
                    <h2>"Stories of Satisfied Customers"</h2>
        </div>
        <div className = "secondR">
        <h1>Reviews</h1>
        <p>What Our Clients Say</p>
        <div id="carouselExampleIndicators" className="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div className="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" className="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div className="carousel-inner">
        {/* First slide */}
        <div className="carousel-item active">
          <div className="card">
            <img src={yuki} className="circular-image" alt="Yuki's photo" />
            <h2>Yuki S.</h2>
            <div className="card-body">
              <p className="card-text">
                “Being a detail-oriented person, I have high standards for myself. Smart Delivery not only meets but exceeds those standards. From the precision in handling delicate fabrics to the seamless delivery, they’ve earned my trust. Smart Delivery is my go-to laundry service.”
              </p>
            </div>
          </div>
        </div>
        {/* Second slide */}
        <div className="carousel-item">
        <div className="card">
            <img src={emily} className="circular-image" alt="Yuki's photo" />
            <h2>Emily T.</h2>
            <div className="card-body">
              <p className="card-text">
              “Smart Delivery has been a game-changer for me! As a busy professional, I don’t have time for laundry. With their efficient service, I can focus on my work while they take care of my clothes. Plus, the freshness of my garments when they return is unmatched. Highly recommend!” 
              </p>
            </div>
          </div>
        </div>
        {/* Third slide */}
        <div className="carousel-item">
        <div className="card">
            <img src={michael} className="circular-image" alt="Yuki's photo" />
            <h2>Michael S.</h2>
            <div className="card-body">
              <p className="card-text">
              “I was skeptical about laundry delivery services, but Smart Delivery exceeded my expectations. From the easy scheduling to the punctual delivery, everything was seamless. My clothes look and smell amazing. It’s like having a laundry fairy at my service!”
              </p>
            </div>
          </div>
        </div>
        {/* Add more slides as needed */}
      </div>
      {/* Carousel controls */}
      <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Previous</span>
      </button>
      <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span className="carousel-control-next-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Next</span>
      </button>
      
    </div>
        </div>
        <div className='seventh'>
            <Footer/>
        </div> 
        </>
    )
}

