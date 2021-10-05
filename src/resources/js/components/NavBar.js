import React from "react";
import { Link } from "react-router-dom";

function NavBar() {
    return (
        <nav bg>
            <ul className="nav">
                <Link to="/">
                    <li>(oto)tsuzuru</li>
                </Link>
            </ul>
        </nav>
    );
}

export default NavBar;
