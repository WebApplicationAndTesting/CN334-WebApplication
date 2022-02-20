
import "./intro.css"
import { init } from "ityped";
import { useEffect, useRef } from "react";

const Intro = () => {

    const textRef = useRef();

    useEffect(()=>{
        init(textRef.current, { 
            showCursor: true,
            cursorChar: ".",
            backDelay: 1500,
            backSpeed: 60,
            strings: ['Thammasat University', 'Software Engineering' ],
        })
    },[])

    return (
        <div className='intro' id="intro">
            <div className="leftIntro">
                <div className="wrapperIntro">
                    <h2>Hello Guy, My Name Is</h2>
                    <h1>Thanapon Puakalong</h1>
                    <h3>
                        <span ref={textRef}></span> 
                    </h3>
                </div>
                <a href="#portfolio">
                    <img src="asset/down.png" alt="" />
                </a>
            </div>
            <div className="rightIntro">
                <div className="imgContainerR">
                    <img src="asset/man.png" alt="" />
                </div>
            </div>
        </div>
    );
}

export default Intro;