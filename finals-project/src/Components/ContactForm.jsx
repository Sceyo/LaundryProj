
import ContSecond from './ContSecond'
import Navbar from './Navbar'
import './ContactForm.css'
import Footer from '../Components/Footer'
export default function ContactForm(){

    return(
        <>
            <Navbar/>    
            <div className="first">
                {/* <h1>We are Smart Delivery</h1>
               
                <h2>"Freshness Delivered to Your Doorstep"</h2> */}
            </div>
            <div className = "announcement">
                <h1>Contact Us</h1>
                <p>"Have a question or comment? Get in touch with our team."</p>

            </div>
            <div className ="Second">
                <ContSecond/>
                
            </div>
            <div className = "Third">
    
            </div>
            <div className='seventh'>
            <Footer/>
            </div>
      
        </>
    )

}