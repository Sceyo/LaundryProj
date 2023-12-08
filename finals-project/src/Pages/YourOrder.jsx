import Navbar from '../Components/AccNavbar'
import Plus from '../Images/plus.png'
import Minus from '../Images/minus.png'
import './YourOrder.css'

export default function YourOrder(){

    return(
        <>
        <div className = "YOBody">
           <Navbar/>
            <div className = "mainYO">
                <h2 className= "YOH2">Your Order</h2>
                <div className ="mainYO1" style={{ display: 'flex', gap: '159px',marginLeft: '65px', marginTop: '30px'}}>
                    <div class="mb-3" style={{width: '250px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Items in Order:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                        <button className="imageButton1"><img src={Plus} style={{ height: '25px',marginLeft: '250px',marginTop:'-70px' }} alt="Plus Icon" /></button>
                        <button className="imageButton1"><img src={Minus} style={{ height: '25px',marginLeft: '290px',marginTop:'-115px'  }} alt="Minus Icon" /></button>
                    </div>   
                    <div class="mb-3" style={{width: '150px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Service Type</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                </div>
                <div className ="mainYO2" style={{ display: 'flex', gap: '159px',marginLeft: '65px', marginTop: '-50px'}}>
                    <div class="mb-3" style={{width: '250px'}}>
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                        <button className="imageButton1"><img src={Plus} style={{ height: '25px',marginLeft: '250px',marginTop:'-70px' }} alt="Plus Icon" /></button>
                        <button className="imageButton1"><img src={Minus} style={{ height: '25px',marginLeft: '290px',marginTop:'-115px'  }} alt="Minus Icon" /></button>
                   </div>   
                    <div class="mb-3" style={{width: '150px'}}>
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                </div>  
            </div>
               
              
        
        </div>
        </>
    )
}