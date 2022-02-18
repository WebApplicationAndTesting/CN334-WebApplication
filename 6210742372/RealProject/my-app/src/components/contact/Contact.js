
import { useState } from "react";
import "./contact.css"

const Contact = () => {
    
    const [message, setMessage] = useState(false)

    const handleSubmit = (e) => {
        e.preventDefault();
        setMessage(true)
    }
    return (
        <div className='contact' id="contact">
            <div className="left">
                <img src="asset/kubkao.png" alt="" />
            </div>
            <div className="right">
                <h2>About me</h2>
                
            </div>
        </div>
    );
}

export default Contact;