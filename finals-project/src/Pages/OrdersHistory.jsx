import './OrdersHistory.css'
import Navbar from '../Components/AccNavbar'

export default function OrdersHistory(){

    return(
        <>
            <div className = "OHBody">
            <Navbar/>
            <div className = "mainO">
               <h2 style = {{fontSize: '25px',fontWeight:'bold', marginTop:'30px', marginLeft: '65px'}}>Orders History</h2>
                <div className = "mainO1" style={{ display: 'flex', gap: '70px',marginLeft: '85px', marginTop: '15px'}}>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Order #</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Order Date:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Status:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                </div>
                <div className = "mainO2" style={{ display: 'flex', gap: '70px',marginLeft: '85px', marginTop: '0px'}}>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Service Type:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Items in Order:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '80px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Qty:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                </div>
                <div className = "mainO3" style={{ display: 'flex', gap: '120px',marginLeft: '85px', marginTop: '0px'}}>
                    <div class="mb-3" style={{width: '150px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Total Cost:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '150px'}}>
                        <label for="exampleFormControlInput1" class="form-label" style = {{width:'300px'}}>Payment Details:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                </div>

                <h2 style= {{fontSize: '20px',fontWeight:'600', marginLeft: '85px',marginTop: '20px', color: 'black'}}>Delivery Details:</h2>
                
                <div className = "mainO4" style={{marginTop: '10px', marginLeft: '95px' ,display: 'flex', gap: '50px'}}>
                    
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label" style = {{width:'300px'}}>Delivery Fee:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label" style = {{width:'300px'}}>ETA:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '200px'}}>
                        <label for="exampleFormControlInput1" class="form-label" style = {{width:'300px'}}>Delivery Address:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                    </div>
                </div>
                <h2 style ={{color: 'black', fontWeight: 'bold',fontSize: '26px',marginLeft: '670px',marginTop: '20px'}}>Track Order</h2>
            </div>
        </div>
        </>
    )
}