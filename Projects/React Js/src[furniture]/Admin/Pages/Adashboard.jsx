import React from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'

function Adashboard() {
  return (
    <div className='cbp-spmenu-push'>
      <div class="main-content">
        <Aheader />
        {/* main content start*/}
        <div id="page-wrapper">
          <div className="main-page">
            <div className="col_3">
              <div className="col-md-3 widget widget1">
                <div className="r3_counter_box">
                  <i className="pull-left fa fa-dollar icon-rounded" />
                  <div className="stats">
                    <h5><strong>$452</strong></h5>
                    <span>Total Revenue</span>
                  </div>
                </div>
              </div>
              <div className="col-md-3 widget widget1">
                <div className="r3_counter_box">
                  <i className="pull-left fa fa-laptop user1 icon-rounded" />
                  <div className="stats">
                    <h5><strong>$1019</strong></h5>
                    <span>Online Revenue</span>
                  </div>
                </div>
              </div>
              <div className="col-md-3 widget widget1">
                <div className="r3_counter_box">
                  <i className="pull-left fa fa-money user2 icon-rounded" />
                  <div className="stats">
                    <h5><strong>$1012</strong></h5>
                    <span>Expenses</span>
                  </div>
                </div>
              </div>
              <div className="col-md-3 widget widget1">
                <div className="r3_counter_box">
                  <i className="pull-left fa fa-pie-chart dollar1 icon-rounded" />
                  <div className="stats">
                    <h5><strong>$450</strong></h5>
                    <span>Expenditure</span>
                  </div>
                </div>
              </div>
              <div className="col-md-3 widget">
                <div className="r3_counter_box">
                  <i className="pull-left fa fa-users dollar2 icon-rounded" />
                  <div className="stats">
                    <h5><strong>1450</strong></h5>
                    <span>Total Users</span>
                  </div>
                </div>
              </div>
              <div className="clearfix"> </div>
            </div>
            <div className="row-one widgettable">
              <div className="col-md-7 content-top-2 card">
                <div className="agileinfo-cdr">
                  <div className="card-header">
                    <h3>Weekly Sales</h3>
                  </div>
                  <div id="Linegraph" style={{ width: '98%', height: 340,marginTop: 10 }}>
                    <img src="Admin/images/slider1.jpg" className="img-responsive" alt />
                  </div>
                </div>
              </div>
              <div className="col-md-3 stat">
                <div className="content-top-1">
                  <div className="col-md-6 top-content">
                    <h5>Sales</h5>
                    <label>1283+</label>
                  </div>
                  <div className="col-md-6 top-content1">
                    <div id="demo-pie-1" className="pie-title-center" data-percent={45}> <span className="pie-value" /> </div>
                  </div>
                  <div className="clearfix"> </div>
                </div>
                <div className="content-top-1">
                  <div className="col-md-6 top-content">
                    <h5>Reviews</h5>
                    <label>2262+</label>
                  </div>
                  <div className="col-md-6 top-content1">
                    <div id="demo-pie-2" className="pie-title-center" data-percent={75}> <span className="pie-value" /> </div>
                  </div>
                  <div className="clearfix"> </div>
                </div>
                <div className="content-top-1">
                  <div className="col-md-6 top-content">
                    <h5>Visitors</h5>
                    <label>12589+</label>
                  </div>
                  <div className="col-md-6 top-content1">
                    <div id="demo-pie-3" className="pie-title-center" data-percent={90}> <span className="pie-value" /> </div>
                  </div>
                  <div className="clearfix"> </div>
                </div>
              </div>
              <div className="col-md-2 stat">
                <div className="content-top">
                  <div className="top-content facebook">
                    <a href="#"><i className="fa fa-facebook" /></a>
                  </div>
                  <ul className="info">
                    <li className="col-md-6"><b>1,296</b>
                      <p>Friends</p>
                    </li>
                    <li className="col-md-6"><b>647</b>
                      <p>Likes</p>
                    </li>
                    <div className="clearfix" />
                  </ul>
                </div>
                <div className="content-top">
                  <div className="top-content twitter">
                    <a href="#"><i className="fa fa-twitter" /></a>
                  </div>
                  <ul className="info">
                    <li className="col-md-6"><b>1,997</b>
                      <p>Followers</p>
                    </li>
                    <li className="col-md-6"><b>389</b>
                      <p>Tweets</p>
                    </li>
                    <div className="clearfix" />
                  </ul>
                </div>
                <div className="content-top">
                  <div className="top-content google-plus">
                    <a href="#"><i className="fa fa-google-plus" /></a>
                  </div>
                  <ul className="info">
                    <li className="col-md-6"><b>1,216</b>
                      <p>Followers</p>
                    </li>
                    <li className="col-md-6"><b>321</b>
                      <p>shares</p>
                    </li>
                    <div className="clearfix" />
                  </ul>
                </div>
              </div>
              <div className="clearfix"> </div>
            </div>
            {/* for amcharts js */}
            <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
            {/* for amcharts js */}
            <div className="col_1">
              <div className="col-md-4 span_8">
                <div className="activity_box">
                  <h2>Inbox</h2>
                  <div className="scrollbar" id="style-1">
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/1.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">Michael Chris</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>12:05 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/4.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">Alexander</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>12:06 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/3.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">Daniel Lucas</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>01:30 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/2.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">Jackson Jacob</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>01:50 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/1.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">David Samuel</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>12:20 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/4.jpg" className="img-responsive" alt /></div>
                      <div className="col-xs-7 activity-desc">
                        <h5><a href="#">laura Smith</a></h5>
                        <p>Hey ! There I'm available.</p>
                      </div>
                      <div className="col-xs-2 activity-desc1">
                        <h6>12:50 PM</h6>
                      </div>
                      <div className="clearfix"> </div>
                    </div>
                  </div>
                  <form action="#" method="post">
                    <input type="text" defaultValue="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required />
                    <input type="submit" defaultValue="Submit" />
                  </form>
                </div>
              </div>
              <div className="col-md-4 span_8">
                <div className="activity_box activity_box1">
                  <h3>chat</h3>
                  <div className="scrollbar" id="style-3">
                    <div className="activity-row activity-row1">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/1.jpg" className="img-responsive" alt /><span>06:01 AM</span></div>
                      <div className="col-xs-5 activity-img1">
                        <div className="activity-desc-sub">
                          <h5>Michael Chris</h5>
                          <p>Hello ! this is Michael chris</p>
                        </div>
                      </div>
                      <div className="col-xs-4 activity-desc1" />
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row activity-row1">
                      <div className="col-xs-2 activity-desc1" />
                      <div className="col-xs-7 activity-img2">
                        <div className="activity-desc-sub1">
                          <h5>Alexander</h5>
                          <p>Hi,How are you ? What about our next meeting?</p>
                        </div>
                      </div>
                      <div className="col-xs-3 activity-img"><img src="Admin/images/3.jpg" className="img-responsive" alt /><span>06:02 AM</span></div>
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row activity-row1">
                      <div className="col-xs-3 activity-img"><img src="Admin/images/1.jpg" className="img-responsive" alt /><span>06:05 AM</span></div>
                      <div className="col-xs-5 activity-img1">
                        <div className="activity-desc-sub">
                          <h5>Michael Chris</h5>
                          <p>Yeah fine, Hope you the same</p>
                        </div>
                      </div>
                      <div className="col-xs-4 activity-desc1" />
                      <div className="clearfix"> </div>
                    </div>
                    <div className="activity-row activity-row1">
                      <div className="col-xs-2 activity-desc1" />
                      <div className="col-xs-7 activity-img2">
                        <div className="activity-desc-sub1">
                          <h5>Alexander</h5>
                          <p>Wow that's great</p>
                        </div>
                      </div>
                      <div className="col-xs-3 activity-img"><img src="Admin/images/3.jpg" className="img-responsive" alt /><span>06:20 PM</span></div>
                      <div className="clearfix"> </div>
                    </div>
                  </div>
                  <form action="#" method="post">
                    <input type="text" defaultValue="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required />
                    <input type="submit" defaultValue="Send" />
                  </form>
                </div>
              </div>
              <div className="col-md-4 span_8">
                <div className="activity_box activity_box2">
                  <h3>todo</h3>
                  <div className="scrollbar" id="style-2">
                    <div className="activity-row activity-row1">
                      <div className="single-bottom">
                        <ul>
                          <li>
                            <input type="checkbox" id="brand" defaultValue />
                            <label htmlFor="brand"><span /> Integer sollicitudin lacinia
                              condimentum.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand1" defaultValue />
                            <label htmlFor="brand1"><span /> ligula sit amet hendrerit init
                              lorem.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand2" defaultValue />
                            <label htmlFor="brand2"><span /> Donec aliquam dolor eu augue
                              condimentum.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand9" defaultValue />
                            <label htmlFor="brand9"><span /> at tristique Pain that produces no
                              resultant.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand8" defaultValue />
                            <label htmlFor="brand8"><span /> Nulla finibus rhoncus turpis quis
                              tristique.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand7" defaultValue />
                            <label htmlFor="brand7"><span /> Cupidatat non proident Praising
                              pain.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand3" defaultValue />
                            <label htmlFor="brand3"><span /> libero vel elementum euismod, mauris
                              tellus</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand4" defaultValue />
                            <label htmlFor="brand4"><span /> Donec aliquam dolor eu augue
                              condimentum.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand5" defaultValue />
                            <label htmlFor="brand5"><span /> Orci varius natoque penatibus et
                              magnis dis.</label>
                          </li>
                          <li>
                            <input type="checkbox" id="brand6" defaultValue />
                            <label htmlFor="brand6"><span /> parturient Dolorem ipsum quia.</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <form action="#" method="post">
                    <input type="text" defaultValue="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required />
                    <input type="submit" defaultValue="Submit" />
                  </form>
                </div>
                <div className="clearfix"> </div>
              </div>
              <div className="clearfix"> </div>
            </div>
          </div>
        </div>



        <Afooter />
      </div>
    </div>

  )
}

export default Adashboard