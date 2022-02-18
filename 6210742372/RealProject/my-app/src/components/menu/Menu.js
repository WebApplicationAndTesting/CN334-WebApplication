import "./menu.css"

const Menu = ({menuOpen, setMenuOpen}) => {
    return (
        <div className={"menu " + (menuOpen && "active")}>
            <ul>
                <li onClick={()=>setMenuOpen(false)}>
                    <a href="#intro">Home</a>
                </li>
                <li onClick={()=>setMenuOpen(false)}>
                    <a href="#contact">About me</a>
                </li>
                
                <li onClick={()=>setMenuOpen(false)}>
                    <a href="#testimonials">Techical skills</a>
                </li>
                <li onClick={()=>setMenuOpen(false)}>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li onClick={()=>setMenuOpen(false)}>
                    <a href="#work">Work</a>
                </li>
                
            </ul>
        </div>
    );
}

export default Menu;