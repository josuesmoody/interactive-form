// Add Shortcode
function plan_de_ejercicio() {
ob_start();
    ?>
	<html lang="en">
	  <head>
	    <style>
	   * {
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box;
	  }
	
	  body {
	    margin: 0px;
	    padding: 0;
	  }
	  
	
	  .main-container {
	    height: 100vh;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    flex-direction: column;
	  }
	
	  .main-container h2 {
	    margin: 0 0 80px 0;
	    color: #55B792;
	    font-size: 30px;
	    font-family: "Raleway", sans-serif;
	    font-weight: 400;
	    text-align: center;
	  }
	
	  .radio-buttons {
	    width: 100%;
	    margin: 0px auto;
	    text-align: center;
	  }
	
	  .custom-radio input {
	    display: none;
	  }
	
	  .radio-btn {
	    margin: 10px;
	    width: 180px;
	    height: 200px;
	    border: 3px solid transparent;
	    display: inline-block;
	    border-radius: 10px;
	    position: relative;
	    text-align: center;
	    box-shadow: 0 0 20px #c3c3c367;
	    cursor: pointer;
	  }
	
	  .radio-btn > i {
	    color: #ffffff;
	    background-color: #55B792;
	    font-size: 20px;
	    position: absolute;
	    top: -15px;
	    left: 50%;
	    transform: translateX(-50%) scale(4);
	    border-radius: 50px;
	    padding: 3px;
	    transition: 0.2s;
	    pointer-events: none;
	    opacity: 0;
	  }
	
	  .radio-btn .hobbies-icon {
	    width: 80px;
	    height: 80px;
	    position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	  }
	
	  .sexo{
	    width: 100%;
	    position: relative;
	    align-items: center;
	    padding-bottom: 20px;
	  }
	
	  .radio-btn .hobbies-icon i {
	    color: #55B792;
	    line-height: 80px;
	    font-size: 60px;
	  }
	
	  .radio-btn .hobbies-icon h3 {
	    color: #55B792;
	    font-family: "Raleway", sans-serif;
	    font-size: 14px;
	    font-weight: 400;
	    text-transform: uppercase;
	  }
	
	  .custom-radio input:checked + .radio-btn {
	    border: 3px solid #55B792;
	  }
	
	  .custom-radio input:checked + .radio-btn > i {
	    opacity: 1;
	    transform: translateX(-50%) scale(1);
	  }
	
	  
	
	  #body-type-options {
	  margin-top: 40px;
	}
	
	#body-type-options h2 {
	  margin-bottom: 50px;
	}
	
	#next-btn,
	#back-btn,
	#submit-btn {
	  margin-top: 20px;
	  padding: 10px 20px;
	  font-size: 16px;
	  background-color: #55B792;
	  color: #ffffff;
	  border: none;
	  border-radius: 5px;
	  cursor: pointer;
	}
	
	#next-btn {
	  margin-right: 10px;
	}
	
	#exercise-plan {
	  margin-top: 40px;
	}
	
	#exercise-plan h2 {
	  margin-bottom: 25px;
	}
	
	#exercise-plan-text {
	  font-size: 18px;
	  color: #55B792;
	}
	    </style>
	  </head>
	  <body>
	    <div class="main-container">
	      <h2>Sexo</h2>
	      <div class="radio-buttons">
	        <label class="custom-radio">
	          <input type="radio" name="radio" value="Hombre" />
	          <span class="radio-btn"
	            ><i class="las la-check"></i>
	            <div class="hobbies-icon">
	              <img src="https://nikolaarrasate.com/wp-content/uploads/2023/06/YDRAY-imagen-hombre.jpg" alt="" class="sexo" />
	              <h3>Hombre</h3>
	            </div>
	          </span>
	        </label>
	
	        <label class="custom-radio">
	          <input type="radio" name="radio" value="Mujer" />
	          <span class="radio-btn"
	            ><i class="las la-check"></i>
	            <div class="hobbies-icon">
	              <img src="https://nikolaarrasate.com/wp-content/uploads/2023/06/YDRAY-imagen-mujer.jpg" alt="" class="sexo" />
	              <h3>Mujer</h3>
	            </div>
	          </span>
	        </label>
	      </div>
	
	      <div id="body-type-options" style="display: none;">
	        <h2>Selecciona tu tipo de cuerpo</h2>
	        <div class="radio-buttons">
	          <label class="custom-radio">
	            <input type="radio" name="body-type" value="Ectomorph" />
	            <span class="radio-btn"
	              ><i class="las la-check"></i>
	              <div class="hobbies-icon">
	                <img src="https://nikolaarrasate.com/wp-content/uploads/2023/06/cuerpo1.png" alt="" class="" />
	                <h3>10%-12% (grasa)</h3>
	              </div>
	            </span>
	          </label>
	
	          <label class="custom-radio">
	            <input type="radio" name="body-type" value="Endomorph" />
	            <span class="radio-btn"
	              ><i class="las la-check"></i>
	              <div class="hobbies-icon">
	                <img src="https://nikolaarrasate.com/wp-content/uploads/2023/06/cuerpo2.png" alt="" class="" />
	                <h3>25% (grasa)</h3>
	              </div>
	            </span>
	          </label>
	
	          <label class="custom-radio">
	            <input type="radio" name="body-type" value="Mesomorph" />
	            <span class="radio-btn"
	              ><i class="las la-check"></i>
	              <div class="hobbies-icon">
	                <img src="https://nikolaarrasate.com/wp-content/uploads/2023/06/cuerpo3.png" alt="" class="" />
	                <h3>40% (grasa)</h3>
	              </div>
	            </span>
	          </label>
	        </div>
	      </div>
	
	      <button id="next-btn" style="display: none;">Siguiente</button>
	      <button id="back-btn" style="display: none;">Atrás</button>
	      <button id="submit-btn" style="display: none;">Enviar</button>
	
	      <div id="exercise-plan" style="display: none;">
	        <h2>Plan de Ejercicio</h2>
	        <p id="exercise-plan-text"></p>
	      </div>
	    </div>
	
	    <script>
	      const radioButtons = document.querySelectorAll('input[type="radio"]');
	      const bodyTypeOptions = document.getElementById("body-type-options");
	      const nextBtn = document.getElementById("next-btn");
	      const backBtn = document.getElementById("back-btn");
	      const submitBtn = document.getElementById("submit-btn");
	      const exercisePlan = document.getElementById("exercise-plan");
	      const exercisePlanText = document.getElementById("exercise-plan-text");
	
	      let selectedGender = "";
	      let selectedBodyType = "";
	
	      radioButtons.forEach((radio) => {
	        radio.addEventListener("change", (event) => {
	          const selectedOption = event.target.value;
	
	          if (selectedOption === "Hombre" || selectedOption === "Mujer") {
	            selectedGender = selectedOption;
	            bodyTypeOptions.style.display = "none";
	            nextBtn.style.display = "inline-block";
	            backBtn.style.display = "none";
	            submitBtn.style.display = "none";
	            exercisePlan.style.display = "none";
	          } else {
	            selectedBodyType = selectedOption;
	            bodyTypeOptions.style.display = "none";
	            nextBtn.style.display = "none";
	            backBtn.style.display = "inline-block";
	            submitBtn.style.display = "inline-block";
	            exercisePlan.style.display = "none";
	          }
	        });
	      });
	
	        nextBtn.addEventListener("click", () => {
	        bodyTypeOptions.style.display = "block";
	        nextBtn.style.display = "none";
	        backBtn.style.display = "inline-block";
	        submitBtn.style.display = "none";
	        exercisePlan.style.display = "none";
	      });
	      
	
	
	      backBtn.addEventListener("click", () => {
	        bodyTypeOptions.style.display = "none";
	        nextBtn.style.display = "inline-block";
	        backBtn.style.display = "none";
	        submitBtn.style.display = "none";
	        exercisePlan.style.display = "none";
	      });
	
	      submitBtn.addEventListener("click", () => {
	        exercisePlanText.innerHTML = generateExercisePlan(selectedGender, selectedBodyType);
	        exercisePlan.style.display = "block";
	      });
	
	      //PLAN DE EJERCICIO
	      
	      function generateExercisePlan(gender, bodyType) {
	  if (gender === "Hombre") {
	    if (bodyType === "Ectomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>AUMENTO DE MASA MUSCULAR</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    } else if (bodyType === "Endomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>RECOMPOSICIÓN MUSCULAR</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    } else if (bodyType === "Mesomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>PÉRDIDA DE PESO</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    }
	  } else if (gender === "Mujer") {
	    if (bodyType === "Ectomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>AUMENTO DE MASA MUSCULAR</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    } else if (bodyType === "Endomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>RECOMPOSICIÓN MUSCULAR</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    } else if (bodyType === "Mesomorph") {
	      return `
	      <style>
	        #outlook a {
	    padding: 0;
	}
	
	.ExternalClass {
	    width: 100%;
	}
	
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	    line-height: 100%;
	}
	
	.es-button {
	    mso-style-priority: 100 !important;
	    text-decoration: none !important;
	}
	
	a[x-apple-data-detectors] {
	    color: inherit !important;
	    text-decoration: none !important;
	    font-size: inherit !important;
	    font-family: inherit !important;
	    font-weight: inherit !important;
	    line-height: inherit !important;
	}
	
	.es-desk-hidden {
	    display: none;
	    float: left;
	    overflow: hidden;
	    width: 0;
	    max-height: 0;
	    line-height: 0;
	    mso-hide: all;
	}
	
	/*
	END OF IMPORTANT
	*/
	s {
	    text-decoration: line-through;
	}
	
	html,
	body {
	    width: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	}
	
	body {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	table {
	    mso-table-lspace: 0pt;
	    mso-table-rspace: 0pt;
	    border-collapse: collapse;
	    border-spacing: 0px;
	}
	
	table td,
	html,
	body,
	.es-wrapper {
	    padding: 0;
	    Margin: 0;
	}
	
	.es-content,
	.es-header,
	.es-footer {
	    table-layout: fixed !important;
	    width: 100%;
	}
	
	img {
	    display: block;
	    border: 0;
	    outline: none;
	    text-decoration: none;
	    -ms-interpolation-mode: bicubic;
	}
	
	table tr {
	    border-collapse: collapse;
	}
	
	p,
	hr {
	    Margin: 0;
	}
	
	h1,
	h2,
	h3,
	h4,
	h5 {
	    Margin: 0;
	    line-height: 120%;
	    mso-line-height-rule: exactly;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	p,
	ul li,
	ol li,
	a {
	    -webkit-text-size-adjust: none;
	    -ms-text-size-adjust: none;
	    mso-line-height-rule: exactly;
	}
	
	.es-left {
	    float: left;
	}
	
	.es-right {
	    float: right;
	}
	
	.es-p5 {
	    padding: 5px;
	}
	
	.es-p5t {
	    padding-top: 5px;
	}
	
	.es-p5b {
	    padding-bottom: 5px;
	}
	
	.es-p5l {
	    padding-left: 5px;
	}
	
	.es-p5r {
	    padding-right: 5px;
	}
	
	.es-p10 {
	    padding: 10px;
	}
	
	.es-p10t {
	    padding-top: 10px;
	}
	
	.es-p10b {
	    padding-bottom: 10px;
	}
	
	.es-p10l {
	    padding-left: 10px;
	}
	
	.es-p10r {
	    padding-right: 10px;
	}
	
	.es-p15 {
	    padding: 15px;
	}
	
	.es-p15t {
	    padding-top: 15px;
	}
	
	.es-p15b {
	    padding-bottom: 15px;
	}
	
	.es-p15l {
	    padding-left: 15px;
	}
	
	.es-p15r {
	    padding-right: 15px;
	}
	
	.es-p20 {
	    padding: 20px;
	}
	
	.es-p20t {
	    padding-top: 20px;
	}
	
	.es-p20b {
	    padding-bottom: 20px;
	}
	
	.es-p20l {
	    padding-left: 20px;
	}
	
	.es-p20r {
	    padding-right: 20px;
	}
	
	.es-p25 {
	    padding: 25px;
	}
	
	.es-p25t {
	    padding-top: 25px;
	}
	
	.es-p25b {
	    padding-bottom: 25px;
	}
	
	.es-p25l {
	    padding-left: 25px;
	}
	
	.es-p25r {
	    padding-right: 25px;
	}
	
	.es-p30 {
	    padding: 30px;
	}
	
	.es-p30t {
	    padding-top: 30px;
	}
	
	.es-p30b {
	    padding-bottom: 30px;
	}
	
	.es-p30l {
	    padding-left: 30px;
	}
	
	.es-p30r {
	    padding-right: 30px;
	}
	
	.es-p35 {
	    padding: 35px;
	}
	
	.es-p35t {
	    padding-top: 35px;
	}
	
	.es-p35b {
	    padding-bottom: 35px;
	}
	
	.es-p35l {
	    padding-left: 35px;
	}
	
	.es-p35r {
	    padding-right: 35px;
	}
	
	.es-p40 {
	    padding: 40px;
	}
	
	.es-p40t {
	    padding-top: 40px;
	}
	
	.es-p40b {
	    padding-bottom: 40px;
	}
	
	.es-p40l {
	    padding-left: 40px;
	}
	
	.es-p40r {
	    padding-right: 40px;
	}
	
	.es-menu td {
	    border: 0;
	}
	
	.es-menu td a img {
	    display: inline-block !important;
	}
	
	/*
	END CONFIG STYLES
	*/
	a {
	    text-decoration: underline;
	}
	
	p,
	ul li,
	ol li {
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	    line-height: 150%;
	}
	
	ul li,
	ol li {
	    Margin-bottom: 15px;
	    margin-left: 0;
	}
	
	.es-menu td a {
	    text-decoration: none;
	    display: block;
	    font-family: arial, 'helvetica neue', helvetica, sans-serif;
	}
	
	
	
	
	h1 {
	    font-size: 30px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h2 {
	    font-size: 24px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	h3 {
	    font-size: 20px;
	    font-style: normal;
	    font-weight: normal;
	    color: #333333;
	}
	
	a.es-button,
	button.es-button {
	    display: inline-block;
	    background: #55B792;
	    border-radius: 20px;
	    font-size: 16px;
	    font-family: helvetica, 'helvetica neue', arial, verdana, sans-serif;
	    font-weight: normal;
	    font-style: normal;
	    line-height: 120%;
	    color: #efefef;
	    text-decoration: none;
	    width: auto;
	    text-align: center;
	    padding: 6px 25px 6px 25px;
	    mso-padding-alt: 0;
	    mso-border-alt: 10px solid #474745;
	}
	
	.es-button-border {
	    border-style: solid solid solid solid;
	    border-color: #474745 #474745 #474745 #474745;
	    background: #474745;
	    border-width: 0px 0px 0px 0px;
	    display: inline-block;
	    border-radius: 20px;
	    width: auto;
	}
	
	@media only screen and (max-width: 600px) {
	
	    p,
	    ul li,
	    ol li,
	    a {
	        line-height: 150% !important;
	    }
	
	    h1,
	    h2,
	    h3,
	    h1 a,
	    h2 a,
	    h3 a {
	        line-height: 120% !important;
	    }
	
	    h1 {
	        font-size: 30px !important;
	        text-align: center;
	    }
	
	    h2 {
	        font-size: 26px !important;
	        text-align: center;
	    }
	
	    h3 {
	        font-size: 20px !important;
	        text-align: center;
	    }
	
	    .es-header-body h1 a,
	    .es-content-body h1 a,
	    .es-footer-body h1 a {
	        font-size: 30px !important;
	    }
	
	    .es-header-body h2 a,
	    .es-content-body h2 a,
	    .es-footer-body h2 a {
	        font-size: 26px !important;
	    }
	
	    .es-header-body h3 a,
	    .es-content-body h3 a,
	    .es-footer-body h3 a {
	        font-size: 20px !important;
	    }
	
	    .es-menu td a {
	        font-size: 16px !important;
	    }
	
	    .es-header-body p,
	    .es-header-body ul li,
	    .es-header-body ol li,
	    .es-header-body a {
	        font-size: 16px !important;
	    }
	
	    .es-content-body p,
	    .es-content-body ul li,
	    .es-content-body ol li,
	    .es-content-body a {
	        font-size: 16px !important;
	    }
	
	    .es-footer-body p,
	    .es-footer-body ul li,
	    .es-footer-body ol li,
	    .es-footer-body a {
	        font-size: 16px !important;
	    }
	
	    .es-infoblock p,
	    .es-infoblock ul li,
	    .es-infoblock ol li,
	    .es-infoblock a {
	        font-size: 12px !important;
	    }
	
	    *[class="gmail-fix"] {
	        display: none !important;
	    }
	
	    .es-m-txt-c,
	    .es-m-txt-c h1,
	    .es-m-txt-c h2,
	    .es-m-txt-c h3 {
	        text-align: center !important;
	    }
	
	    .es-m-txt-r,
	    .es-m-txt-r h1,
	    .es-m-txt-r h2,
	    .es-m-txt-r h3 {
	        text-align: right !important;
	    }
	
	    .es-m-txt-l,
	    .es-m-txt-l h1,
	    .es-m-txt-l h2,
	    .es-m-txt-l h3 {
	        text-align: left !important;
	    }
	
	    .es-m-txt-r img,
	    .es-m-txt-c img,
	    .es-m-txt-l img {
	        display: inline !important;
	    }
	
	    .es-button-border {
	        display: inline-block !important;
	    }
	
	    a.es-button,
	    button.es-button {
	        font-size: 18px !important;
	        display: inline-block !important;
	    }
	
	    .es-btn-fw {
	        border-width: 10px 0px !important;
	        text-align: center !important;
	    }
	
	    .es-adaptive table,
	    .es-btn-fw,
	    .es-btn-fw-brdr,
	    .es-left,
	    .es-right {
	        width: 100% !important;
	    }
	
	    .es-content table,
	    .es-header table,
	    .es-footer table,
	    .es-content,
	    .es-footer,
	    .es-header {
	        width: 100% !important;
	        max-width: 600px !important;
	    }
	
	    .es-adapt-td {
	        display: block !important;
	        width: 100% !important;
	    }
	
	    .adapt-img {
	        width: 100% !important;
	        height: auto !important;
	    }
	
	    .es-m-p0 {
	        padding: 0px !important;
	    }
	
	    .es-m-p0r {
	        padding-right: 0px !important;
	    }
	
	    .es-m-p0l {
	        padding-left: 0px !important;
	    }
	
	    .es-m-p0t {
	        padding-top: 0px !important;
	    }
	
	    .es-m-p0b {
	        padding-bottom: 0 !important;
	    }
	
	    .es-m-p20b {
	        padding-bottom: 20px !important;
	    }
	
	    .es-mobile-hidden,
	    .es-hidden {
	        display: none !important;
	    }
	
	    tr.es-desk-hidden,
	    td.es-desk-hidden,
	    table.es-desk-hidden {
	        width: auto !important;
	        overflow: visible !important;
	        float: none !important;
	        max-height: inherit !important;
	        line-height: inherit !important;
	    }
	
	    tr.es-desk-hidden {
	        display: table-row !important;
	    }
	
	    table.es-desk-hidden {
	        display: table !important;
	    }
	
	    td.es-desk-menu-hidden {
	        display: table-cell !important;
	    }
	
	    .es-menu td {
	        width: 1% !important;
	    }
	
	    table.es-table-not-adapt,
	    .esd-block-html table {
	        width: auto !important;
	    }
	
	    table.es-social {
	        display: inline-block !important;
	    }
	
	    table.es-social td {
	        display: inline-block !important;
	    }
	
	    .es-desk-hidden {
	        display: table-row !important;
	        width: auto !important;
	        overflow: visible !important;
	        max-height: inherit !important;
	    }
	}
	        </style>
	      <table width="100%" cellspacing="0" cellpadding="0">
	        <tbody>
	            <tr>
	                <td class="esd-block-text" align="center">
	                    <p style="color: #999999; font-family: lora, georgia, times\ new\ roman, serif; font-size: 16px;"><em>TU PROGRAMA ES</em></p>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c" align="center">
	                    <h2>PÉRDIDA DE PESO</h2>
	                </td>
	            </tr>
	            <tr>
	                <td class="esd-block-text es-m-txt-c es-p15t" align="center">
	                    <p>There is a time for business and a time for pleasure. There is a time to work and a time to rest. Labor Day is your time for pleasure and rest. Enjoy!</p>
	                </td>
	            </tr>
	            
	            <tr>
	                <td class="esd-block-button es-p15t es-p10r es-p10l" align="center"><span class="es-button-border"><a href="https://viewstripo.email/" class="es-button" target="_blank">QUIERO SABER MÁS</a></span></td>
	            </tr>
	        </tbody>
	    </table>
	      `;
	    }
	  }
	      }
	  // HTML predeterminado si no
	
	
	      //
	
	      submitBtn.addEventListener("click", () => {
	        exercisePlanText.innerHTML = generateExercisePlan(selectedGender, selectedBodyType);
	        exercisePlan.style.display = "block";
	
	        // Ocultar todo excepto el plan de ejercicio
	        document.getElementById("form-title").style.display = "none";
	        document.getElementById("gender-options").style.display = "none";
	        document.getElementById("body-type-options").style.display = "none";
	        nextBtn.style.display = "none";
	        backBtn.style.display = "none";
	        submitBtn.style.display = "none";
	      });
	    </script>
	  </body>
	</html>
	
	
	
<?php
    return ob_get_clean();
}
add_shortcode( 'plan_de_ejercicio_shortcode', 'plan_de_ejercicio' );
