import './Payment.css'

export default function Payment(){

    const handleGoBack = () => {
        window.history.go(-1); // Go back to the previous page
    };

    return(
        <>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"></link>
            <div className = "PContainer">
            <div className ="cc1" style ={{marginLeft:'60px',position:'absolute', marginTop: '30px'}}>
           <a href="#" onClick={handleGoBack} style={{textDecoration: 'none',color: 'black',fontSize: '30px', marginTop: '30px'}}><i class="fas fa-arrow-left"></i> Back</a> 
                </div> 
                <div className = "paymentB">
                    <h3 className ="titleP"> Payment</h3>
                        <h3 className = "titleP1">Enter your Payment Details </h3>
                    <h4 className ="titleP2"> Order Summary:</h4>
                
                <div className ="mainP1" style={{ display: 'flex', gap: '98px'}}>
                    <div class="mb-3" style={{width: '300px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Items in Order:</label>
                        <h3>XXXXXXX</h3>
                     </div>
                    <div class="mb-3" style={{width: '300px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Service Type:</label>
                        <h3>XXXXXXX</h3>
                    </div>
                </div>
                

                <div className ="mainP1" style={{ display: 'flex', gap: '98px'}}>
                    <div class="mb-3" style={{width: '300px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Qty:</label>
                        <h3>XXXXXXX</h3>
                     </div>
                    <div class="mb-3" style={{width: '300px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Kg:</label>
                        <h3>XXXXXXX</h3>
                    </div>
                </div>

                <div className ="mainP2" >
                    <div class="mb-3" style={{width: '570px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Name of Customer:</label>
                        <input type="item" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                    <div class="mb-3" style={{width: '570px',marginTop:'50px'}}>
                        <label for="exampleFormControlInput1" class="form-label">Contact Info:</label>
                        <input type="item" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                    </div>
                </div>

                <div className ="mainP3">
                    <div className = "lineP1">
                        <h3>Payment Type:</h3>
                        <h2>Cash on Delivery</h2>
                        <h3>XXXXXXXXXXX</h3>
                    </div>
                    <div className = "lineP1">
                        <h2>TOTAL PAYMENT:</h2>
                        <h3 style={{marginLeft:'-250px'}}>₱</h3>
                    </div>
                    <div className = "lineP1">
                        <button>Confirm Payment</button>
                    </div>
                </div>
                <div className ="Pspace" style ={{height:'100px'}}>

                </div>

                </div>
            </div>
        </>
    )
}
