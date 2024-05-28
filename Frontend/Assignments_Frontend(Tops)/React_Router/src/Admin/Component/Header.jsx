import React from 'react'
import { Helmet } from 'react-helmet'
import { NavLink } from 'react-router-dom'

function Header() {
    return (
        <>
            <div>
                <div id="wrapper">
                    <div className="navbar navbar-inverse navbar-fixed-top">
                        <div className="adjust-nav">
                            <div className="navbar-header">
                                <button type="button" className="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                    <span className="icon-bar" />
                                    <span className="icon-bar" />
                                    <span className="icon-bar" />
                                </button>
                                <a className="navbar-brand" href="#">
                                    <img src="Admin/assets/img/logo.png" />
                                </a>
                            </div>
                            <span className="logout-spn">
                                <a href="#" style={{ color: '#fff' }}>LOGOUT</a>
                            </span>
                        </div>
                    </div>
                    {/* /. NAV TOP  */}
                    <nav className="navbar-default navbar-side" role="navigation">
                        <div className="sidebar-collapse">
                            <ul className="nav" id="main-menu">
                                <li className="active-link">
                                    <NavLink to="/"><i className="fa fa-desktop " />Dashboard <span className="badge">Included</span></NavLink>
                                </li>
                                <li>
                                    <NavLink to="/add_mng_user"><i className="fa fa-edit " />User<span className="badge">Included</span></NavLink>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                    {/* /. NAV SIDE  */}
                </div>
            </div>


            <Helmet>
                <link href="Admin/assets/css/bootstrap.css" rel="stylesheet" />

                <link href="Admin/assets/css/font-awesome.css" rel="stylesheet" />

                <link href="Admin/assets/css/custom.css" rel="stylesheet" />

                <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            </Helmet>
        </>
    )
}

export default Header