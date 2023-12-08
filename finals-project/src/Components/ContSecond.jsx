import './ContactForm.css'
import Logo from '../Images/logo.svg';

export default function ContSecond(){
    
    return(
        <>
            <div className ="firstHalf" >
                    <h3 style ={{marginLeft: '31%'}}>Say Hello to Washy!</h3>
                    <img src ={Logo} style ={{marginLeft: '20%'}}/>
                </div>
                <div className = "secondHalf">
                    <div className = "tBody">
                        <h2>FAQs</h2>
                        <p>To get the information you need, browse through our Facebook page to know more about our service.</p>
                        <a href="https://www.facebook.com/profile.php?id=61554654621825" className="visit-link" target="_blank" rel="noopener noreferrer">Visit FAQs &gt;</a>
                    </div>
                    <div className = "tBody">
                        <h2>Chat Us*</h2>
                        <p>Have an urgent question that needs to be answered? That's why we are here.</p>
                        <a href="https://www.facebook.com/profile.php?id=61554654621825" className="visit-link" target="_blank" rel="noopener noreferrer">Chat Now &gt;</a>
                    </div>
                    <div className = "tBody">
                        <h2>Call Us*</h2>
                        <p>For an in-person conversation, please give us a call at 123-4567-890 or Call us through Facebook Messenger.</p>
                        <a href="https://www.facebook.com/profile.php?id=61554654621825" className="visit-link" target="_blank" rel="noopener noreferrer">Call Us &gt;</a>

                    </div>
                   
                   

                    



                </div>
        
        
        </>

    )
}