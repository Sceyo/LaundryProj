
import Navbar from '../Components/Navbar'
import './Services.css'
import delivery from '../Images/delivery.png'
import WDF from '../Images/laundry-basket.png'
import DC from '../Images/dry-cleaning.png'
import blanket from '../Images/blanket.png'
import SU from '../Images/sign-up.png'
import SE from '../Images/select.png'
import PU from '../Images/pickup.png'
import TO from '../Images/track order.png'
import STable from '../Components/ServicesTable'
import RC from '../Images/receive.png'
import LM from '../Images/laundry-machine.png'
import yuki from '../Images/yuki.png'
import emily from '../Images/emily.png'
import michael from '../Images/michael.png'
import Footer from '../Components/Footer'


export default function Services(){

    return(
        <>
            <Navbar/>
 
                <div className ="firstS">
                    <h1>Our Laundry Services</h1>
               
                    <h2>"Convenient, Reliable, Hassle-Free"</h2>
                </div>
                
                <div className = "secondS">
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

                <div className = "three">
                    <h1>How It Works</h1>
                    <div className ="body3">
                        <div class="container3">
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                    <img src ={SU} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p>Sign Up for an Account</p>
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
                                <img src ={PU} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p>Schedule Pickup</p>
                            </div>
                           
                        
                    </div>

                    <div class="container4">
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={LM} style ={{height: '100px',marginLeft: '-20px'}}/>
                                </div>
                            </div>
                            <p>We Take Care Of The Rest</p>
                            </div>
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={TO} style ={{height: '100px',marginLeft: '15px'}}/>
                                </div>
                            </div>
                            <p>Track Your Order</p>
                            </div>
                            <div class="circCard2">
                            <div class="circle2">
                                <div class="innerCirc2">
                                <img src ={RC} style ={{height: '100px'}}/>
                                </div>
                            </div>
                            <p>Receive Neatly Folded Laundry</p>
                            </div>
                        </div>
                    </div>    
                </div>

                <div className='fourthS'>
                    <h1>Pricing</h1>
                    <STable/>
                    <div className = 'FSText' style ={{fontSize: '20px', marginLeft: '270px',marginTop: '40px'}}>
                        <p>*Pickup &amp; Delivery:</p>
                        <ul style={{marginTop: '-20px'}}>
                            <li>1-5 kms away - FREE</li>
                            <li>6-10 kms away - ₱50</li>
                        </ul>
                    </div>
                </div>

                <div className = 'fifthS'>
                <table class="styled-table" style={{ border: '2px solid black',paddingTop: '40px'}}>
                    <thead>
                        <tr>
                        <th><h1>Dry Cleaning</h1></th>
                        <th><h1>Price</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>BARONG PIÑA</td>
                        <td>₱180/pc</td>
                        </tr>
                        <tr>
                        <td>BARONG ORDINARY</td>
                        <td>₱150/pc</td>
                        </tr>
                        <tr>
                        <td>NECKTIE/HANKY</td>
                        <td>₱30/pc</td>
                        </tr>
                        <tr>
                        <td>POLO</td>
                        <td>₱80/pc</td>
                        </tr>
                        <tr>
                        <td>PANTS/TROUSER</td>
                        <td>₱100/pc</td>
                        </tr>
                        <tr>
                        <td>COAT/BLAZER</td>
                        <td>₱150/pc</td>
                        </tr>
                        <tr>
                        <td>SUIT SET</td>
                        <td>₱250/SET</td>
                        </tr>
                        <tr>
                        <td>JACKET SIMPLE</td>
                        <td>₱150/pc</td>
                        </tr>
                        <tr>
                        <td>JACKET LEATHER</td>
                        <td>₱250/pc</td>
                        </tr>
                        <tr>
                        <td>BLOUSE SHORT/SKIRT SHORT</td>
                        <td>₱50/pc</td>
                        </tr>
                        <tr>
                        <td>BLOUSE LONG/SKIRT LONG</td>
                        <td>₱80/pc</td>
                        </tr>
                        <tr>
                        <td>DRESS SIMPLE SHORT</td>
                        <td>₱120/pc</td>
                        </tr>
                        <tr>
                        <td>DRESS SIMPLE LONG</td>
                        <td>₱150/pc</td>
                        </tr>
                    </tbody>
                </table>
                </div>
        
          <div className='seventh'>
            <Footer/>
        </div>
        </>
    )

}