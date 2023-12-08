import './ProfileInfo.css'
import Navbar from '../Components/AccNavbar'
import Plus from '../Images/plus.png'
import Minus from '../Images/minus.png'

export default function ProfileInfo(){

    return(
        <>
        <div className = "PIBody">
            <Navbar/>
            <div className = "mainB" style={{  overflowY: 'auto', height: 'calc(100vh - 100px)'}}>
                
                <div className ="mainB1" style={{ display: 'flex', gap: '98px',marginLeft: '65px', marginTop: '50px'}}>
                <div class="mb-3" style={{width: '300px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name of User" style ={{border: '2px solid black'}}/>
                </div>
                <div class="mb-3" style={{width: '300px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email of User" style ={{border: '2px solid black'}}/>
                </div>
                </div>

                <div className ="mainB2" style={{ display: 'flex', gap: '98px',marginLeft: '65px', marginTop: '50px'}}>
                <div class="mb-3" style={{width: '300px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+63 123-4567-890" style ={{border: '2px solid black'}}/>
                </div>
                <div class="mb-3" style={{width: '300px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="DOB" style ={{border: '2px solid black'}}/>
                </div>
                </div>

                <div className ="mainB3" style={{marginLeft: '65px', marginTop: '50px'}}>
                <div class="mb-3" style={{width: '500px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                </div>
                <div class="mb-3" style={{width: '500px'}}>
                    <label for="exampleFormControlInput1" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                </div>
                <div class="mb-3" style={{width: '500px'}}>
                    <label for="exampleFormControlInput1" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  style ={{border: '2px solid black'}}/>
                </div>
                <button className = "SetP">Set Password</button>
                </div>

                <button className = "DelA">Delete Account</button>
            </div>
        </div>
        </>
    )
}