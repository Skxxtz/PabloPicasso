<?php
require("top.php");
?>




<body id="body">
<div class="Front" id="Front">

    <div class="login" id="button" onmousedown="this.style.background='#fff', this.style.color='#222'" onmouseup="this.style.background='#222', this.style.color='#fff'" onclick="scrollPos(3)">Login</div>
    <div class="animation">
        <svg id="logo1" class="logo1 active" width="735" height="72" viewBox="0 0 735 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="path1" d="M9.736 42.28V69.544H1V1.864H22.504C30.248 1.864 36.04 3.688 39.88 7.33601C43.72 10.92 45.64 15.848 45.64 22.12C45.64 28.456 43.656 33.416 39.688 37C35.72 40.52 29.992 42.28 22.504 42.28H9.736ZM21.736 34.984C27.048 34.984 30.856 33.864 33.16 31.624C35.528 29.384 36.712 26.216 36.712 22.12C36.712 17.896 35.528 14.696 33.16 12.52C30.856 10.28 27.048 9.16 21.736 9.16H9.736V34.984H21.736Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path2" d="M107.78 1.864V69.544H98.9477V38.248H64.5798V69.544H55.8438V1.864H64.5798V31.144H98.9477V1.864H107.78Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path3" d="M152.758 1C159.03 1 164.662 2.472 169.654 5.416C174.71 8.36 178.678 12.488 181.558 17.8C184.438 23.048 185.878 29 185.878 35.656C185.878 42.312 184.438 48.296 181.558 53.608C178.678 58.856 174.71 62.952 169.654 65.896C164.662 68.84 159.03 70.312 152.758 70.312C146.486 70.312 140.79 68.84 135.67 65.896C130.614 62.952 126.646 58.856 123.766 53.608C120.886 48.296 119.446 42.312 119.446 35.656C119.446 29 120.886 23.048 123.766 17.8C126.646 12.488 130.614 8.36 135.67 5.416C140.79 2.472 146.486 1 152.758 1ZM152.758 9.16C148.086 9.16 143.894 10.248 140.182 12.424C136.534 14.536 133.654 17.608 131.542 21.64C129.494 25.608 128.47 30.28 128.47 35.656C128.47 40.968 129.494 45.64 131.542 49.672C133.654 53.704 136.534 56.808 140.182 58.984C143.894 61.096 148.086 62.152 152.758 62.152C157.366 62.152 161.494 61.064 165.142 58.888C168.854 56.712 171.734 53.64 173.782 49.672C175.894 45.64 176.95 40.968 176.95 35.656C176.95 30.28 175.894 25.608 173.782 21.64C171.734 17.608 168.854 14.536 165.142 12.424C161.494 10.248 157.366 9.16 152.758 9.16Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path4" d="M239.16 1.864V8.968H220.056V69.544H211.32V8.968H192.215V1.864H239.16Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path5" d="M278.852 1C285.124 1 290.756 2.472 295.748 5.416C300.804 8.36 304.772 12.488 307.652 17.8C310.532 23.048 311.972 29 311.972 35.656C311.972 42.312 310.532 48.296 307.652 53.608C304.772 58.856 300.804 62.952 295.748 65.896C290.756 68.84 285.124 70.312 278.852 70.312C272.58 70.312 266.884 68.84 261.764 65.896C256.708 62.952 252.74 58.856 249.86 53.608C246.98 48.296 245.54 42.312 245.54 35.656C245.54 29 246.98 23.048 249.86 17.8C252.74 12.488 256.708 8.36 261.764 5.416C266.884 2.472 272.58 1 278.852 1ZM278.852 9.16C274.18 9.16 269.988 10.248 266.276 12.424C262.628 14.536 259.748 17.608 257.636 21.64C255.588 25.608 254.564 30.28 254.564 35.656C254.564 40.968 255.588 45.64 257.636 49.672C259.748 53.704 262.628 56.808 266.276 58.984C269.988 61.096 274.18 62.152 278.852 62.152C283.46 62.152 287.588 61.064 291.236 58.888C294.948 56.712 297.828 53.64 299.876 49.672C301.988 45.64 303.044 40.968 303.044 35.656C303.044 30.28 301.988 25.608 299.876 21.64C297.828 17.608 294.948 14.536 291.236 12.424C287.588 10.248 283.46 9.16 278.852 9.16Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path6" d="M354.501 1.19201C362.373 1.19201 368.965 3.144 374.277 7.048C379.653 10.952 383.269 16.264 385.125 22.984H375.909C374.309 18.888 371.621 15.592 367.845 13.096C364.133 10.6 359.717 9.35201 354.597 9.35201C349.989 9.35201 345.861 10.44 342.213 12.616C338.565 14.728 335.685 17.768 333.573 21.736C331.525 25.704 330.501 30.376 330.501 35.752C330.501 41.256 331.557 46.024 333.669 50.056C335.781 54.024 338.693 57.096 342.405 59.272C346.181 61.384 350.501 62.44 355.365 62.44C359.525 62.44 363.333 61.544 366.789 59.752C370.245 57.96 373.061 55.368 375.237 51.976C377.477 48.52 378.821 44.488 379.269 39.88H352.677V33.352H386.661V41.416C386.085 46.792 384.421 51.656 381.669 56.008C378.917 60.36 375.205 63.816 370.533 66.376C365.861 68.936 360.549 70.216 354.597 70.216C348.069 70.216 342.309 68.776 337.317 65.896C332.325 62.952 328.421 58.888 325.605 53.704C322.853 48.456 321.477 42.472 321.477 35.752C321.477 29.032 322.853 23.08 325.605 17.896C328.421 12.648 332.325 8.55201 337.317 5.60801C342.309 2.66401 348.037 1.19201 354.501 1.19201Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path7" d="M434.404 69.544L416.74 41.896H407.236V69.544H398.5V1.864H420.772C428.452 1.864 434.212 3.72001 438.052 7.43201C441.892 11.08 443.812 15.944 443.812 22.024C443.812 27.528 442.276 31.976 439.204 35.368C436.132 38.696 431.684 40.776 425.86 41.608L444.292 69.544H434.404ZM407.236 35.56H420.004C429.924 35.56 434.884 31.208 434.884 22.504C434.884 13.8 429.924 9.448 420.004 9.448H407.236V35.56Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path8" d="M494.117 53.896H464.357L458.693 69.544H449.285L474.341 3.112H484.229L509.189 69.544H499.781L494.117 53.896ZM491.621 47.08L479.237 12.904L466.853 47.08H491.621Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path9" d="M526.767 42.28V69.544H518.031V1.864H539.535C547.279 1.864 553.071 3.688 556.911 7.33601C560.751 10.92 562.671 15.848 562.671 22.12C562.671 28.456 560.687 33.416 556.719 37C552.751 40.52 547.023 42.28 539.535 42.28H526.767ZM538.767 34.984C544.079 34.984 547.887 33.864 550.191 31.624C552.559 29.384 553.743 26.216 553.743 22.12C553.743 17.896 552.559 14.696 550.191 12.52C547.887 10.28 544.079 9.16 538.767 9.16H526.767V34.984H538.767Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path10" d="M624.811 1.864V69.544H615.979V38.248H581.611V69.544H572.875V1.864H581.611V31.144H615.979V1.864H624.811Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path11" d="M647.517 8.968V32.104H673.245V38.824H647.517V62.44H676.125V69.544H638.781V1.864H676.125V8.968H647.517Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path12" d="M723.248 69.544L705.584 41.896H696.08V69.544H687.344V1.864H709.616C717.296 1.864 723.056 3.72001 726.896 7.43201C730.736 11.08 732.656 15.944 732.656 22.024C732.656 27.528 731.12 31.976 728.048 35.368C724.976 38.696 720.528 40.776 714.704 41.608L733.136 69.544H723.248ZM696.08 35.56H708.848C718.768 35.56 723.728 31.208 723.728 22.504C723.728 13.8 718.768 9.448 708.848 9.448H696.08V35.56Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        </svg>

        <svg id="logo2" class="logo2 start" width="442" height="72" viewBox="0 0 442 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="path13" d="M59.8 36.0159C59.8 42.8639 58.392 48.8479 55.576 53.9679C52.824 59.0239 48.76 62.9599 43.384 65.7759C38.072 68.5919 31.704 69.9999 24.28 69.9999H1.62402V2.22386H24.28C31.704 2.22386 38.072 3.63186 43.384 6.44786C48.76 9.19986 52.824 13.1039 55.576 18.1599C58.392 23.2159 59.8 29.1679 59.8 36.0159ZM23.416 60.1119C31.544 60.1119 37.784 57.9999 42.136 53.7759C46.488 49.5519 48.664 43.6319 48.664 36.0159C48.664 28.3999 46.488 22.4799 42.136 18.2559C37.784 14.0319 31.544 11.9199 23.416 11.9199H12.568V60.1119H23.416Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path14" d="M81.7555 11.0559V31.5999H106.716V40.0479H81.7555V61.0719H109.596V69.9999H70.8115V2.22386H109.596V11.0559H81.7555Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path15" d="M164.762 51.9519C164.762 55.2799 163.962 58.3839 162.362 61.2639C160.762 64.0799 158.33 66.3519 155.066 68.0799C151.802 69.8079 147.802 70.6719 143.066 70.6719C138.458 70.6719 134.33 69.8719 130.682 68.2719C127.034 66.6079 124.122 64.3039 121.946 61.3599C119.77 58.4159 118.522 55.0239 118.202 51.1839H129.914C130.234 54.1279 131.482 56.6559 133.658 58.7679C135.898 60.8799 138.874 61.9359 142.586 61.9359C145.914 61.9359 148.474 61.0399 150.266 59.2479C152.122 57.4559 153.05 55.1519 153.05 52.3359C153.05 49.9039 152.378 47.9199 151.034 46.3839C149.69 44.7839 148.026 43.5359 146.042 42.6399C144.058 41.7439 141.338 40.7199 137.882 39.5679C133.658 38.2239 130.202 36.8799 127.514 35.5359C124.89 34.1919 122.65 32.2399 120.794 29.6799C118.938 27.1199 118.01 23.7599 118.01 19.5999C118.01 15.9519 118.906 12.7519 120.698 9.99987C122.49 7.24786 125.05 5.13586 128.378 3.66386C131.706 2.12786 135.546 1.35986 139.898 1.35986C146.81 1.35986 152.282 3.02386 156.314 6.35186C160.41 9.67986 162.746 14.0319 163.322 19.4079H151.514C151.066 16.8479 149.85 14.6719 147.866 12.8799C145.946 11.0239 143.29 10.0959 139.898 10.0959C136.826 10.0959 134.362 10.8959 132.506 12.4959C130.65 14.0319 129.722 16.2719 129.722 19.2159C129.722 21.5199 130.362 23.4399 131.642 24.9759C132.922 26.4479 134.522 27.6319 136.442 28.5279C138.426 29.3599 141.114 30.3519 144.506 31.5039C148.794 32.8479 152.282 34.2239 154.97 35.6319C157.722 36.9759 160.026 38.9599 161.882 41.5839C163.802 44.2079 164.762 47.6639 164.762 51.9519Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path16" d="M186.662 2.22386V69.9999H175.718V2.22386H186.662Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path17" d="M230.913 1.64787C238.977 1.64787 245.697 3.63186 251.073 7.59986C256.449 11.5679 260.001 16.9759 261.729 23.8239H250.209C248.737 20.1759 246.305 17.2639 242.913 15.0879C239.585 12.9119 235.617 11.8239 231.009 11.8239C226.785 11.8239 222.977 12.8159 219.585 14.7999C216.257 16.7839 213.633 19.5999 211.713 23.2479C209.857 26.8959 208.929 31.1839 208.929 36.1119C208.929 41.2959 209.889 45.7439 211.809 49.4559C213.729 53.1679 216.417 56.0159 219.873 57.9999C223.393 59.9199 227.457 60.8799 232.065 60.8799C237.697 60.8799 242.529 59.1519 246.561 55.6959C250.593 52.1759 253.025 47.3759 253.857 41.2959H228.993V33.2319H263.073V43.6959C262.305 48.6879 260.513 53.2319 257.697 57.3279C254.945 61.3599 251.265 64.5919 246.657 67.0239C242.113 69.4559 236.897 70.6719 231.009 70.6719C224.417 70.6719 218.593 69.1999 213.537 66.2559C208.481 63.3119 204.577 59.2479 201.825 54.0639C199.073 48.8159 197.697 42.8319 197.697 36.1119C197.697 29.3919 199.073 23.4399 201.825 18.2559C204.577 13.0079 208.449 8.94386 213.441 6.06387C218.497 3.11987 224.321 1.64787 230.913 1.64787Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path18" d="M328.971 69.9999H318.027L285.099 19.9839V69.9999H274.155V2.31986H285.099L318.027 52.5279V2.31986H328.971V69.9999Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path19" d="M353.162 11.0559V31.5999H378.122V40.0479H353.162V61.0719H381.002V69.9999H342.218V2.22386H381.002V11.0559H353.162Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path20" d="M427.24 69.9999L410.344 42.9279H402.568V69.9999H391.624V2.22386H415.528C423.272 2.22386 429.128 4.11186 433.096 7.88787C437.128 11.6639 439.144 16.6559 439.144 22.8639C439.144 28.1759 437.64 32.5279 434.632 35.9199C431.688 39.3119 427.4 41.4879 421.768 42.4479L439.528 69.9999H427.24ZM402.568 35.1519H414.664C423.496 35.1519 427.912 31.2479 427.912 23.4399C427.912 19.7279 426.824 16.8479 424.648 14.7999C422.536 12.6879 419.208 11.6319 414.664 11.6319H402.568V35.1519Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        </svg>

        <svg id="logo3" class="logo3 start" width="541" height="72" viewBox="0 0 541 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="path21" d="M12.568 2.22376V69.9998H1.62402V2.22376H12.568Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path22" d="M80.6275 69.9998H69.6835L36.7555 19.9838V69.9998H25.8115V2.31976H36.7555L69.6835 52.5278V2.31976H80.6275V69.9998Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path23" d="M133.906 2.22376V11.0558H104.818V32.0798H128.818V40.5278H104.818V69.9998H93.874V2.22376H133.906Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path24" d="M154.599 61.4558H178.023V69.9998H143.655V2.22376H154.599V61.4558Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path25" d="M197.057 2.22376V42.4478C197.057 48.4638 198.369 52.9438 200.993 55.8878C203.681 58.8318 207.425 60.3038 212.225 60.3038C216.961 60.3038 220.641 58.8318 223.265 55.8878C225.953 52.9438 227.297 48.4638 227.297 42.4478V2.22376H238.241V42.4478C238.241 51.7278 235.841 58.7678 231.041 63.5678C226.241 68.3038 219.905 70.6718 212.033 70.6718C204.225 70.6718 197.953 68.3038 193.217 63.5678C188.481 58.7678 186.113 51.7278 186.113 42.4478V2.22376H197.057Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path26" d="M261.943 11.0558V31.5998H286.903V40.0478H261.943V61.0718H289.783V69.9998H250.999V2.22376H289.783V11.0558H261.943Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path27"  d="M355.221 69.9998H344.277L311.349 19.9838V69.9998H300.405V2.31976H311.349L344.277 52.5278V2.31976H355.221V69.9998Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path28" d="M398.708 1.55176C407.028 1.55176 413.94 3.66376 419.444 7.88776C424.948 12.1118 428.66 17.8398 430.58 25.0718H418.964C417.364 20.9758 414.804 17.7438 411.284 15.3758C407.828 12.9438 403.572 11.7278 398.516 11.7278C394.484 11.7278 390.868 12.7198 387.668 14.7038C384.532 16.6878 382.036 19.5358 380.18 23.2478C378.388 26.8958 377.492 31.1838 377.492 36.1118C377.492 40.9758 378.388 45.2638 380.18 48.9758C382.036 52.6238 384.532 55.4398 387.668 57.4238C390.868 59.4078 394.484 60.3998 398.516 60.3998C403.572 60.3998 407.828 59.2158 411.284 56.8478C414.804 54.4158 417.364 51.1838 418.964 47.1518H430.58C428.66 54.3838 424.948 60.1118 419.444 64.3358C413.94 68.4958 407.028 70.5758 398.708 70.5758C392.308 70.5758 386.644 69.1358 381.716 66.2558C376.788 63.3118 372.98 59.2478 370.292 54.0638C367.604 48.8158 366.26 42.8318 366.26 36.1118C366.26 29.3918 367.604 23.4398 370.292 18.2558C372.98 13.0078 376.788 8.91176 381.716 5.96776C386.644 3.02376 392.308 1.55176 398.708 1.55176Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path29" d="M452.443 11.0558V31.5998H477.403V40.0478H452.443V61.0718H480.283V69.9998H441.499V2.22376H480.283V11.0558H452.443Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        <path id="path30" d="M526.521 69.9998L509.625 42.9278H501.849V69.9998H490.905V2.22376H514.809C522.553 2.22376 528.409 4.11176 532.377 7.88776C536.409 11.6638 538.425 16.6558 538.425 22.8638C538.425 28.1758 536.921 32.5278 533.913 35.9198C530.969 39.3118 526.681 41.4878 521.049 42.4478L538.809 69.9998H526.521ZM501.849 35.1518H513.945C522.777 35.1518 527.193 31.2478 527.193 23.4398C527.193 19.7278 526.105 16.8478 523.929 14.7998C521.817 12.6878 518.489 11.6318 513.945 11.6318H501.849V35.1518Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1)"/>
        </svg>  
    </div>
    <div class="round_button" id="arrow_click" onclick="scrollPos(1)">
        <svg onclick="scrollPos(1)" class="svg1" x="0" y="0" width="22.21" height="12.774" viewBox="0, 0, 22.21, 12.774" >
            <g id="Layer_1" transform="translate(-303.858, -479.436)">
                <path id="arrow_click" d="M325.58,479.925 L325.58,479.925 C326.231,480.577 326.231,481.633 325.58,482.284 L316.142,491.722 C315.49,492.374 314.434,492.374 313.783,491.722 L313.783,491.722 C313.131,491.071 313.131,490.014 313.783,489.363 L323.22,479.925 C323.872,479.273 324.928,479.273 325.58,479.925 z" fill="#000000"/>
                <path id="arrow_click" d="M304.346,479.925 L304.346,479.925 C304.998,479.273 306.054,479.273 306.706,479.925 L316.144,489.363 C316.795,490.014 316.795,491.071 316.144,491.722 L316.144,491.722 C315.492,492.374 314.436,492.374 313.784,491.722 L304.346,482.284 C303.695,481.633 303.695,480.577 304.346,479.925 z" fill="#000000"/>
            </g>
        </svg>
    </div>
</div>      
<div class="content" id="Content">

    <div class="text">
        <p class="title">Stealing artwork is a crime.</p>
        <p class="title">We protect your design.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde aliquid possimus accusamus aliquam delectus molestias autem quia exercitationem, natus esse voluptatem consequatur omnis dignissimos dolorem nesciunt repudiandae perspiciatis. Corrupti, numquam.</p>
        
    </div>

</div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error explicabo incidunt, voluptates quaerat libero totam vero, sit impedit rerum cum sint corrupti blanditiis nam! Soluta distinctio atque repellat quibusdam aut.
<div class="target">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam beatae maxime blanditiis quia quas libero inventore, cupiditate eaque, dolores corrupti laborum eveniet aliquid? Numquam similique earum fugiat facilis deleniti accusantium?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis earum in id odit quo culpa quos obcaecati fuga asperiores? Id nostrum fugiat sequi! Ab mollitia expedita dicta suscipit delectus ex! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ducimus temporibus, deleniti laboriosam, voluptates iusto, officia repellendus accusantium esse quae sint. Sunt impedit dolorem laboriosam vero maiores, facilis eum cumque.</p>
</div>
<div class="login_section">

<div class='logs'>
    

    <svg class="svg2" onclick="scrollPos(0)"width="98" height="8" viewBox="0 0 98 8" fill="none">
        <path  d="M0.646446 3.64645C0.451187 3.84171 0.451187 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53554 7.53553C4.7308 7.34027 4.7308 7.02369 4.53554 6.82843L1.70711 4L4.53554 1.17157C4.7308 0.976311 4.7308 0.659728 4.53554 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM98 3.5L1 3.5V4.5L98 4.5V3.5Z" fill="black"/>
    </svg>

<form action="login.php" method="POST" class="form">
        <input type="text" placeholder="E-mail" id="email" autocomplete="off" name="mail1">
        <p></p>
        <input type="password" placeholder="Passwort" id="password" autocomplete="off" name="pwd1">
        <hr id="hr1"><p></p><hr  id="hr2">
        <div class="button" onclick="document.location='#registration', registrate('smooth')">Registrieren</div>
        <p></p>
        <input type="submit" class="button" value="Login" id="LoginSubmit" name="submitbtn">
        
</form>
</div>
    <div class="animation_login">
        <p class="loginTxt">L</p>
        <p class="loginTxt">o</p>
        <p class="loginTxt">g</p>
        <p class="loginTxt">i</p>
        <p class="loginTxt">n</p>
        <p class="loginTxt">.</p>
    </div>

    <form action="Signup.inc.php" method="POST" id="form">
        <svg class="svg4" onclick="enableScroll(), window.location='#3', scrollPos(3,'smooth')"width="98" height="8" viewBox="0 0 98 8" fill="none">
            <path  d="M0.646446 3.64645C0.451187 3.84171 0.451187 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53554 7.53553C4.7308 7.34027 4.7308 7.02369 4.53554 6.82843L1.70711 4L4.53554 1.17157C4.7308 0.976311 4.7308 0.659728 4.53554 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM98 3.5L1 3.5V4.5L98 4.5V3.5Z" fill="white"/>
        </svg>
        <div id="form_reg">
        <input type="text" autocorrect="off" placeholder="Vorname" id="reg_prename" onfocus="line(1), keyallow()" onblur="lineout(1), keydisable()" name="pname" autocomplete="off" autocapitalize="words">
        <input type="text" autocorrect="off" placeholder="Name" id="reg_name" onfocus="line(2), keyallow()" onblur="lineout(2), keydisable()" name="name" autocomplete="off" autocapitalize="words">
        <hr id="reg_hr1"><hr id="reg_hr2">

        <input type="text"  autocorrect="off"placeholder="E-mail" id="reg_email" onfocus="line(3), keyallow()" onblur="lineout(3)" name="mail" autocomplete="off">
        <input type="text"  autocorrect="off"placeholder="Geburtstag" id="reg_birthday" onfocus="line(4), keyallow()" onblur="lineout(4) , keydisable()" name="birthday" autocomplete="off">
        <hr id="reg_hr3"><hr id="reg_hr4">

        <input type="password" autocorrect="off" placeholder="Passwort" id="reg_password" onfocus="line(5), keyallow()" onblur="lineout(5) , keydisable()" name="password" autocomplete="off">
        <input type="password" autocorrect="off" placeholder="Passwort wiederholen" id="reg_repeat_pwd" onfocus="line(6), keyallow()" onblur="lineout(6) , keydisable()" name="Cpassword" autocomplete="off">
        <hr id="reg_hr5"><hr id="reg_hr6">
        <input type="checkbox" name="agb" id="cb1" checked="on" style="display:none;"><p id="agb" onclick="textbody('Agb')">Mit der Anmeldung stimmst du den AGBs zu.</a> zu.</p>
        </div>
        <div id="plan"></div>


        <input type="submit" value="Registrieren" id="reg_button" name="submitbtn">
        
        
    </form>
</div>
<div class="footer">
    <hr>
    <ul class="links">
        <li><a  class="title">Über Picasso</a></li>
        <li><a  class="title">Services</a></li>
        <li><a  class="title">Account</a></li>
        <li><a  class="title">Verwaltung</a></li>

        <li><a onclick="textbody('Agb')">Allgemeine Geschäftsbedingungen</a></li>
        <li><a href="">Produnkte</a></li>
        <li><a onclick="scrollPos(3)">Deinen Account Verwalten</a></li>
        <li><a onclick="textbody('Cookies')">Verwendung von Cookies</a></li>
        <li><a onclick="textbody('Datenschutz')">Datenschutz</a></li>
        <li><a href="">Bepreisung</a></li>
        <li><a href="registration.php">Picasso Account</a></li>
        <li><a href="">Nutzungsbedingungen</a></li>
        <li><a onclick="textbody('Kontakt')">Kontakt</a></li>
        <li><a onclick="textbody('Widerruf')">Widerruf</a></li>
        <li><a href=""></a></li>
        <li><a onclick="textbody('Impressum')">Rechtilche Hinweise</a></li>
        <li><a href="">FAQ</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href="">Sitemap</a></li>
        <li><a href="">Hilfe</a></li>
</a></li>
    </ul>
</div>

<script src="animation_script.js"></script>
<script src="script.js"></script>
<script src="text.js"></script>

</body>
</html>