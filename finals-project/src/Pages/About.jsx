import Navbar from '../Components/Navbar'
import AboutBody from '../Components/AboutBody'
import Quality from '../Images/quality.png'
import handshake from '../Images/handshake.png'
import innovation from '../Images/Innovation.png'
import convenience from '../Images/convenience.png'
import Footer from '../Components/Footer'
import './About.css'
import AU2 from '../Images/About us 2.jpg'
import AU4 from '../Images/About us 4.jpg'
import AU5 from '../Images/About us 5.jpg'
import justine from '../Images/Justine.jpg'
import francis from '../Images/aliser.jpg'
import kimi from '../Images/kimi.jpg'
import pael from '../Images/Pael.jpg'

export default function About(){

    return(
        <>
            <Navbar/>
            <div className="firstA">
                <h1>We are Smart Wash</h1>
               
                <h2>"Freshness Delivered to Your Doorstep"</h2>
            </div>
            <div className = "Second">
                <AboutBody/>
            </div>
            <div className = "third">
                <h1>What Sets us Apart</h1>
                <div className = "holdSymbol">
                    <div className='symbol'>
                        <h2>Quality</h2>
                        <img src = {Quality} style ={{height: '100px', width: 'auto'}}/>
                    </div>
                    <div className='symbol'>
                        <h2>Convenience</h2>
                        <img src = {convenience} style ={{height: '100px', width: 'auto', marginLeft: '40px'}}/>
                    </div>
                    <div className='symbol'>
                        <h2>Reliability</h2>
                        <img src = {handshake} style ={{height: '100px', width: 'auto', marginLeft: '20px'}}/>
                    </div>
                    <div className='symbol'>
                        <h2>Innovation</h2>
                        <img src = {innovation} style ={{height: '100px', width: 'auto',marginLeft: '30px'}}/>
                    </div>
                </div>
            </div>
            <div className="fourth">
                <div class="row featurette" style={{marginLeft:'50px'}}>
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1" style ={{textAlign: 'left',color: 'black',fontWeight: 'bolder', fontSize: '50px', marginTop: '50px'}}>Who Are We?</h2>
                        <p class="lead" style = {{fontSize: '25px', textAlign: 'left', width:'90%'}}>At Smart Delivery, we take pride in being a group of enthusiastic students who have come together to redefine the laundry delivery experience. Our team comprises bright minds from various disciplines, united by a common goal – providing you with unparalleled laundry care.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <div class="image-container" style ={{marginTop: '40px'}}>
                            <img src={justine} style={{height: '250px'}} />
                            <img src={francis} style={{height: '250px'}} />
                        </div>
                        <div class="image-container" style ={{marginTop: '30px'}}>
                            <img src={kimi} style={{height: '250px'}} />
                            <img src={pael} style={{height: '250px'}} />
                        </div>
                    </div>
                </div>
            </div>

            <div className = "fifth">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1" style={{fontSize: '50px', color: 'black',textAlign: 'left'}}>About Us</h2>
                        <p class="lead" style ={{fontSize: '25px', width:'90%',marginTop: '30px'}}>Smart Delivery provides a seamless laundry experience for students. Our service combines convenience with cutting-edge technology, ensuring you focus on your studies, while we take care of your laundry. Enjoy quality service, affordability, and an eco-friendly approach tailored to your student lifestyle.</p>
                        
                    </div>
                    <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src={AU4} alt="500x500 Image" style = {{marginTop: '50px', height: 'auto',width:'1200px'}}/>

                    </div>
                </div>
            </div>

            <div className='sixth'>
                <h1>Join Us on this Journey</h1>
                <div class="row featurette" style={{marginLeft:'50px'}}>
                    <div class="col-md-7 order-md-2">
                        <p class="lead" style = {{fontSize: '25px', textAlign: 'left', width:'90%', fontWeight: '500',marginTop: '20px'}}>We invite you to experience the future of laundry services with Smart Delivery. Whether you're a busy professional, a parent on the go, or someone who simply values their time, we're here to make your life easier.</p>
                        <p class="lead" style = {{fontSize: '25px', textAlign: 'left', width:'90%', fontWeight: '500'}}>Thank you for choosing Smart Delivery. Let's simplify your laundry experience together</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src={AU5} alt="500x500 Image" style = {{marginTop: '75px', height: 'auto',width:'1200px', marginRight: '100px'}}/>
                    </div>
                </div>
            </div>
            <div className='seventh'>
            <Footer/>
        </div>      
        </>

    )

}