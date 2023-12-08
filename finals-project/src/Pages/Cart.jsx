
import './Cart.css'
import Plus from '../Images/plus.png'
import Minus from '../Images/minus.png'
import React, { useState } from 'react';

export default function Cart(){

    const [quantity, setQuantity] = useState(0); // State to manage the quantity

    const handleIncrement = () => {
        setQuantity(prevQuantity => prevQuantity + 1); // Increment the quantity by 1
    };

    const handleDecrement = () => {
        if (quantity > 0) {
            setQuantity(prevQuantity => prevQuantity - 1); // Decrement the quantity by 1 if greater than 0
        }
    };

    
    const handleGoBack = () => {
        window.history.go(-1); // Go back to the previous page
    };

    return(
        <>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"></link>
        <div className = "CContainer">
           <div className ="cc1" style ={{marginLeft:'60px',position:'absolute'}}>
           <a href="#" onClick={handleGoBack} style={{textDecoration: 'none',color: 'black',fontSize: '30px', marginTop: '30px'}}><i class="fas fa-arrow-left"></i> Back</a> 
                </div>          
            <div className ="cartB">
                
                <h3> Your Cart</h3>
                <div className = "lineC1" style ={{display:'flex', marginTop: '100px', marginLeft: '50px', gap: '100px'}}>
                        <div class="mb-3" style={{width: '250px'}}>
                            <label for="exampleFormControlInput1" class="form-label">Items in Order:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                        </div>

                        <div class="mb-3" style={{width: '150px'}}>
                            <label for="exampleFormControlInput1" class="form-label">Service Type</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                        </div>

                        <div className="mb-3" style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', width: '70px' }}>
                            <label htmlFor="quantity" className="form-label">Qty:</label>
                            <div style={{ display: 'flex', alignItems: 'center' }}>
                                <button className="imageButton" style={{ marginRight: '5px' }} onClick={handleIncrement}>
                                    <img src={Plus} style={{ height: '25px' }} alt="Plus Icon" />
                                </button>
                                <input type="number" className="form-control" id="quantity" value={quantity} style={{ border: '2px solid black', width: '70px', textAlign: 'center' }} />
                                <button className="imageButton" style={{ marginLeft: '5px' }} onClick={handleDecrement}>
                                    <img src={Minus} style={{ height: '25px' }} alt="Minus Icon" />
                                </button>
                            </div>
                        </div>



                        <div class="mb-3" style={{width: '70px'}}>
                            <label for="exampleFormControlInput1" class="form-label">Kg:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                        </div>

                        <div class="mb-3" style={{width: '120px'}}>
                            <label for="exampleFormControlInput1" class="form-label">Price:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" style ={{border: '2px solid black'}}/>
                        </div>

                        <span class="rmvBtn" style ={{marginLeft: '-40px'}}>Remove</span>
                </div>
            </div>
        </div>
        </>
    )
}