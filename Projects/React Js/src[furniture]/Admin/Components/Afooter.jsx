import React from 'react'
import { Helmet } from 'react-helmet'

function Afooter() {
  return (
    <>
      <div>
        {/*footer*/}
        <div className="footer">
          <p>© 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
        </div>
        {/*//footer*/}
      </div>

      <Helmet>
        <script src="Admin/js/Chart.bundle.js"></script>
        <script src="Admin/js/utils.js"></script>
        <script src="Admin/js/classie.js"></script>
        <script src="Admin/js/jquery.nicescroll.js"></script>
        <script src="Admin/js/scripts.js"></script>
        <script src='Admin/js/SidebarNav.min.js' type='text/javascript'></script>
        <script src="Admin/js/SimpleChart.js"></script>
        <script src="Admin/js/bootstrap.js"> </script>
      </Helmet>
    </>
  )
}

export default Afooter