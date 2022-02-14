import "./topbar.css"
import {Person, Mail} from "@material-ui/icons"

const Topbar = ({menuOpen, setMenuOpen}) => {
    return (
        <div className={"topbar " + (menuOpen && "active")}>
            <div className="wrapper">
                <div className="left">
                    <a href="#intro" className="logo">Portfolio</a>
                    <div className="itemContainer">
                        <Person className="icon"/>
                        <span className="spanData">085 589 4133</span>
                    </div>
                    <div className="itemContainer">
                        <Mail className="icon"/>
                        <span className="spanData">thanapon.workdev@gmail.com</span>
                    </div>
                </div>
                <div className="right">
                    <div className="hamburger" onClick = {()=>setMenuOpen(!menuOpen)}>
                        <span className="one"></span>
                        <span className="two"></span>
                        <span className="three"></span>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Topbar;