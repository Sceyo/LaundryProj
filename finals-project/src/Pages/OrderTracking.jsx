
import './OrderTracking.css'
import Navbar from '../Components/AccNavbar'
import OP from '../Images/order-placed.png'
import OC from '../Images/order-confirmed.png'
import OPr from '../Images/order-processed.png'
import RP from '../Images/order-pickup.png'


export default function OrderTracking(){

    return(
        <>
            <div className = "OTBody">
                <Navbar/>
                
                <div className = "mainOT">
                    <div className = "line1" style ={{display:'flex', marginTop: '30px'}}>
                        <h2 style = {{fontSize: '22px',fontWeight:'bold', marginLeft: '65px'}}>Order Tracking</h2>
                        <h2 style = {{fontSize: '22px',fontWeight:'bold', marginLeft: '265px'}}>ETA: 01/02/2023</h2>
                    </div>
                    <div className = "line2" style ={{display:'flex', marginTop: '10px'}}>
                        <h2 style = {{fontSize: '22px',fontWeight:'bold',  marginLeft: '65px'}}>Order #: 0000000001 </h2>
                        <h2 style = {{fontSize: '22px',fontWeight:'bold', marginLeft: '200px'}}>Contact #: 123-4567-890</h2>
                    </div>
                    <div className = "line3" style ={{display:'flex', marginTop: '100px', marginLeft: '50px'}}>
                        <div class="mb-3" style={{width: '200px'}}>
                            <img src= {OP}/>
                            <h3>Order Placed</h3>
                        </div>
                        <div class="waitingLine">
                        <div class="line"></div>
                        <div class="circle"></div>
                        </div>
                        <div class="mb-3" style={{width: '200px'}}>
                            <img src= {OC}/>
                            <h3 style ={{marginLeft: '-10px'}}>Order Confirmed</h3>
                        </div>
                        <div class="waitingLine">
                        <div class="line"></div>
                        <div class="circle"></div>
                        </div>
                        <div class="mb-3" style={{width: '200px'}}>
                            <img src= {OPr}/>
                            <h3 style={{textAlign:'center',marginLeft:'-20px'}}>Order Processed</h3>
                        </div>
                        <div class="waitingLine">
                        <div class="line"></div>
                        <div class="circle"></div>
                        </div>
                        <div class="mb-3" style={{width: '200px'}}>
                            <img src= {RP}/>
                            <h3 style={{textAlign:'center',marginLeft:'-30px'}}>Ready for Pickup</h3>
                        </div>
                    </div>
                </div> 
        </div>    
        
        </>
    )
}