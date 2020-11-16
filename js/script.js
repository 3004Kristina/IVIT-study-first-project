const mobile_menu_btn = document.querySelector('.mobile_menu_btn');
const body = document.querySelector('body');
const mobile_menu_bg = document.querySelector('.mobile_menu_bg');


for (let dropDownToggle of document.querySelectorAll('.with_dropdown .dropdown_toggle')) {
    let withDropdown = dropDownToggle.closest('.with_dropdown');

    dropDownToggle.addEventListener('click', (e) => {
        e.preventDefault();
        withDropdown.classList.toggle('open');
    });
}


document.addEventListener('click', (e) => {
    for (let withDropdown of document.querySelectorAll('.with_dropdown.open')) {
        if (withDropdown.contains(e.target) === false) {
            withDropdown.classList.remove('open');
        }
    }
});

mobile_menu_btn.addEventListener('click', (e) => {
    e.preventDefault();
    body.classList.toggle('mobile-menu-opened');

});

mobile_menu_bg.addEventListener('click', () => {
    body.classList.remove('mobile-menu-opened');
});

function initMap() {
    const image = '../img/location.png';
    let coords = {lat: 51.5124696, lng: -0.1420052};
    let map = new google.maps.Map(document.getElementById('map'), {
        center: coords,
        zoom: 17,
        styles: [
            {
                'featureType': 'water',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#e9e9e9'
                    },
                    {
                        'lightness': 17
                    }
                ]
            },
            {
                'featureType': 'landscape',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#f5f5f5'
                    },
                    {
                        'lightness': 20
                    }
                ]
            },
            {
                'featureType': 'road.highway',
                'elementType': 'geometry.fill',
                'stylers': [
                    {
                        'color': '#ffffff'
                    },
                    {
                        'lightness': 17
                    }
                ]
            },
            {
                'featureType': 'road.highway',
                'elementType': 'geometry.stroke',
                'stylers': [
                    {
                        'color': '#ffffff'
                    },
                    {
                        'lightness': 29
                    },
                    {
                        'weight': 0.2
                    }
                ]
            },
            {
                'featureType': 'road.arterial',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#ffffff'
                    },
                    {
                        'lightness': 18
                    }
                ]
            },
            {
                'featureType': 'road.local',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#ffffff'
                    },
                    {
                        'lightness': 16
                    }
                ]
            },
            {
                'featureType': 'poi',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#f5f5f5'
                    },
                    {
                        'lightness': 21
                    }
                ]
            },
            {
                'featureType': 'poi.park',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#dedede'
                    },
                    {
                        'lightness': 21
                    }
                ]
            },
            {
                'elementType': 'labels.text.stroke',
                'stylers': [
                    {
                        'visibility': 'on'
                    },
                    {
                        'color': '#ffffff'
                    },
                    {
                        'lightness': 16
                    }
                ]
            },
            {
                'elementType': 'labels.text.fill',
                'stylers': [
                    {
                        'saturation': 36
                    },
                    {
                        'color': '#333333'
                    },
                    {
                        'lightness': 40
                    }
                ]
            },
            {
                'elementType': 'labels.icon',
                'stylers': [
                    {
                        'visibility': 'off'
                    }
                ]
            },
            {
                'featureType': 'transit',
                'elementType': 'geometry',
                'stylers': [
                    {
                        'color': '#f2f2f2'
                    },
                    {
                        'lightness': 19
                    }
                ]
            },
            {
                'featureType': 'administrative',
                'elementType': 'geometry.fill',
                'stylers': [
                    {
                        'color': '#fefefe'
                    },
                    {
                        'lightness': 20
                    }
                ]
            },
            {
                'featureType': 'administrative',
                'elementType': 'geometry.stroke',
                'stylers': [
                    {
                        'color': '#fefefe'
                    },
                    {
                        'lightness': 17
                    },
                    {
                        'weight': 1.2
                    }
                ]
            }
        ]
    });

    new google.maps.Marker({
        position: coords,
        map,
        icon: image,
        title: 'AVE'
    });
}

jQuery(function() {
    jQuery('.product_carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        fade: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
        cssEase: 'linear'
    });

    jQuery('.qty').each(function() {
        let $qty = jQuery(this),
            $input = $qty.find('input[type="number"]'),
            $up = $qty.find('.up'),
            $down = $qty.find('.down');

        $up.on('click', function() {
          let res = $input.val();
          res++;
          $input.val(res);
        });

        $down.on('click', function() {
            let res = $input.val();
            res--;
            $input.val(Math.max(res, 1));
        });
    });
});

