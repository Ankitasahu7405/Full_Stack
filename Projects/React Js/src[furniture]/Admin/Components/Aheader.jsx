import React,  { useState, useEffect } from 'react'
import { Helmet } from 'react-helmet'
import { NavLink } from 'react-router-dom'
import { toast } from 'react-toastify';
import { useNavigate } from 'react-router-dom';

function Aheader() {

  useEffect(() => {
    if (localStorage.getItem('aid')) {
    }
    else {
      return redirect('/admin_login')
    }
  }, []);

  const redirect = useNavigate();
  const adminlogout = () => {
    localStorage.removeItem('aid');
    localStorage.removeItem('aname');
    toast.success('Logout Success ');
    redirect('/admin_login');
    return false;
  }

  return (
    <>
      <Helmet>
        <link href="Admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="Admin/css/style.css" rel='stylesheet' type='text/css' />
        <link href="Admin/css/font-awesome.css" rel="stylesheet" />
        <link href='Admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
        <script src="Admin/js/jquery-1.11.1.min.js"></script>
        <script src="Admin/js/modernizr.custom.js"></script>
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet" />
        <script src="Admin/js/Chart.js"></script>
        <script src="Admin/js/metisMenu.min.js"></script>
        <script src="Admin/js/custom.js"></script>
        <link href="Admin/css/custom.css" rel="stylesheet" />
      </Helmet>
      <div className="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        {/*left-fixed -navigation*/}
        <aside className="sidebar-left">
          <nav className="navbar navbar-inverse">
            <div className="navbar-header">
              <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                <span className="sr-only">Toggle navigation</span>
                <span className="icon-bar" />
                <span className="icon-bar" />
                <span className="icon-bar" />
              </button>
              <h1><a className="navbar-brand" href="index.html"><span className="fa fa-area-chart" /> Glance<span className="dashboard_text">Design dashboard</span></a></h1>
            </div>
            <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul className="sidebar-menu">
                <li className="header">MAIN NAVIGATION</li>
                <li className="treeview">
                  <a href="/dashboard">
                    <i className="fa fa-dashboard" /> <span>Dashboard</span>
                  </a>
                </li>
                <li className="treeview">
                  <NavLink href="#">
                    <i className="fa fa-heart" />
                    <span>Category</span>
                    <i className="fa fa-angle-left pull-right" />
                  </NavLink>
                  <ul className="treeview-menu">
                    <li><NavLink to="/add_cate"><i className="fa fa-angle-right" /> Add Category</NavLink></li>
                    <li><NavLink to="/manage_cate"><i className="fa fa-angle-right" /> Manage Category</NavLink></li>
                  </ul>
                </li>
                <li className="treeview">
                  <NavLink href="#">
                    <i className="fa fa-laptop" />
                    <span>Product</span>
                    <i className="fa fa-angle-left pull-right" />
                  </NavLink>
                  <ul className="treeview-menu">
                    <li><NavLink to="/add_prod"><i className="fa fa-angle-right" /> Add Product</NavLink></li>
                    <li><NavLink to="/manage_prod"><i className="fa fa-angle-right" /> Manage Product</NavLink></li>
                  </ul>
                </li>
                <li className="treeview">
                  <NavLink to="/manage_cust">
                    <i className="fa fa-user" />
                    <span>Customer</span>
                  </NavLink>
                </li>
                <li className="treeview">
                  <NavLink to="/manage_cont">
                    <i className="fa fa-users" />
                    <span>Contact</span>
                  </NavLink>
                </li>
              </ul>
            </div>
            {/* /.navbar-collapse */}
          </nav>
        </aside>
      </div>
      {/*left-fixed -navigation*/}
      {/* header-starts */}
      <div className="sticky-header header-section ">
        <div className="header-left">
          {/*toggle button start*/}
          <button id="showLeftPush"><i className="fa fa-bars" /></button>
          {/*toggle button end*/}
          <div className="profile_details_left">{/*notifications of menu start */}
            <ul className="nofitications-dropdown">
              <li className="dropdown head-dpdn">
                <a href="#" className="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i className="fa fa-envelope" /><span className="badge">4</span></a>
                <ul className="dropdown-menu">
                  <li>
                    <div className="notification_header">
                      <h3>You have 3 new messages</h3>
                    </div>
                  </li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/1.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet</p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li className="odd"><a href="#">
                    <div className="user_img"><img src="Admin/images/4.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/3.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/2.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li>
                    <div className="notification_bottom">
                      <a href="#">See all messages</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li className="dropdown head-dpdn">
                <a href="#" className="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i className="fa fa-bell" /><span className="badge blue">4</span></a>
                <ul className="dropdown-menu">
                  <li>
                    <div className="notification_header">
                      <h3>You have 3 new notification</h3>
                    </div>
                  </li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/4.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet</p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li className="odd"><a href="#">
                    <div className="user_img"><img src="Admin/images/1.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/3.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li><a href="#">
                    <div className="user_img"><img src="Admin/images/2.jpg" alt /></div>
                    <div className="notification_desc">
                      <p>Lorem ipsum dolor amet </p>
                      <p><span>1 hour ago</span></p>
                    </div>
                    <div className="clearfix" />
                  </a></li>
                  <li>
                    <div className="notification_bottom">
                      <a href="#">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li className="dropdown head-dpdn">
                <a href="#" className="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i className="fa fa-tasks" /><span className="badge blue1">8</span></a>
                <ul className="dropdown-menu">
                  <li>
                    <div className="notification_header">
                      <h3>You have 8 pending task</h3>
                    </div>
                  </li>
                  <li><a href="#">
                    <div className="task-info">
                      <span className="task-desc">Database update</span><span className="percentage">40%</span>
                      <div className="clearfix" />
                    </div>
                    <div className="progress progress-striped active">
                      <div className="bar yellow" style={{ width: '40%' }} />
                    </div>
                  </a></li>
                  <li><a href="#">
                    <div className="task-info">
                      <span className="task-desc">Dashboard done</span><span className="percentage">90%</span>
                      <div className="clearfix" />
                    </div>
                    <div className="progress progress-striped active">
                      <div className="bar green" style={{ width: '90%' }} />
                    </div>
                  </a></li>
                  <li><a href="#">
                    <div className="task-info">
                      <span className="task-desc">Mobile App</span><span className="percentage">33%</span>
                      <div className="clearfix" />
                    </div>
                    <div className="progress progress-striped active">
                      <div className="bar red" style={{ width: '33%' }} />
                    </div>
                  </a></li>
                  <li><a href="#">
                    <div className="task-info">
                      <span className="task-desc">Issues fixed</span><span className="percentage">80%</span>
                      <div className="clearfix" />
                    </div>
                    <div className="progress progress-striped active">
                      <div className="bar  blue" style={{ width: '80%' }} />
                    </div>
                  </a></li>
                  <li>
                    <div className="notification_bottom">
                      <a href="#">See all pending tasks</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div className="clearfix"> </div>
          </div>
          {/*notification menu end */}
          <div className="clearfix"> </div>
        </div>
        <div className="header-right">
          {/*search-box*/}
          <div className="search-box">
            <form className="input">
              <input className="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
              <label className="input__label" htmlFor="input-31">
                <svg className="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                  <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                </svg>
              </label>
            </form>
          </div>{/*//end-search-box*/}
          <div className="profile_details">
            <ul>
              <li className="dropdown profile_details_drop">
                <a href="#" className="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <div className="profile_img">
                    <span className="prfil-img"><img src="Admin/images/2.jpg" alt /> </span>
                    <div className="user-name">
                      <p>Admin Name</p>
                      <span>Administrator</span>
                    </div>
                    <i className="fa fa-angle-down lnr" />
                    <i className="fa fa-angle-up lnr" />
                    <div className="clearfix" />
                  </div>
                </a>
                <ul className="dropdown-menu drp-mnu">
                  <li> <a href="#"><i className="fa fa-cog" /> Settings</a> </li>
                  <li> <a href="#"><i className="fa fa-user" /> My Account</a> </li>
                  <li> <a href="/admin_profile"><i className="fa fa-suitcase" /> Profile</a> </li>
                  <li> <a href="javascript:void(0)" onClick={adminlogout}><i className="fa fa-sign-out"  /> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
          <div className="clearfix"> </div>
        </div>
        <div className="clearfix"> </div>
      </div>
    </>
  )
}

export default Aheader