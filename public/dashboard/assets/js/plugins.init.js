/* Template Name: Hously - Tailwind CSS Real Estate Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 2.2.0
   Created: May 2022
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Countdown Js         * (For Comingsoon pages)
 *     02.  Maintenance js       * (For Maintenance page)
 *     03.  Data Counter         *
 *     04.  Gallery filter js    * (For Portfolio pages)
 *     05.  Tobii lightbox       * (For Portfolio pages)
 *     06.  Back Button          *
 *     07.  Components           *
 *          1. Modal             *
 *          2. Accordions        *
 *     08. Upload Profile        *
 *     09. Custom Dropdown       * (For Dropdown)
 *     10. Apex Charts        *
 ================================*/

//=========================================//
/*            01) Countdown                */
//=========================================//
try {
    if(document.getElementById("days")){
        // The data/time we want to countdown to
        var eventCountDown = new Date("December 25, 2024 16:37:52").getTime();

        // Run myfunc every second
        var myfunc = setInterval(function () {

            var now = new Date().getTime();
            var timeleft = eventCountDown - now;

            // Calculating the days, hours, minutes and seconds left
            var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            // Result is output to the specific element
            document.getElementById("days").innerHTML = days + "<p class='count-head'>Days</p> "
            document.getElementById("hours").innerHTML = hours + "<p class='count-head'>Hours</p> "
            document.getElementById("mins").innerHTML = minutes + "<p class='count-head'>Mins</p> "
            document.getElementById("secs").innerHTML = seconds + "<p class='count-head'>Secs</p> "

            // Display the message when countdown is over
            if (timeleft < 0) {
                clearInterval(myfunc);
                document.getElementById("days").innerHTML = ""
                document.getElementById("hours").innerHTML = ""
                document.getElementById("mins").innerHTML = ""
                document.getElementById("secs").innerHTML = ""
                document.getElementById("end").innerHTML = "00:00:00:00";
            }
        }, 1000);
    }
} catch (err) {

}


//=========================================//
/*/*            02) Maintenance js         */
//=========================================//
try {
    if(document.getElementById("maintenance")){
        var seconds = 3599;
        function secondPassed() {
            var minutes = Math.round((seconds - 30) / 60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('maintenance').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('maintenance').innerHTML = "Buzz Buzz";
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval('secondPassed()', 1000);
    }
} catch (err) {

}

//=========================================//
/*/*            03) Data Counter           */
//=========================================//
try {
    const counter = document.querySelectorAll('.counter-value');
    const speed = 2500; // The lower the slower

    counter.forEach(counter_value => {
        const updateCount = () => {
            const target = +counter_value.getAttribute('data-target');
            const count = +counter_value.innerText;

            // Lower inc to slow and higher to slow
            var inc = target / speed;

            if (inc < 1) {
                inc = 1;
            }

            // Check if target is reached
            if (count < target) {
                // Add inc to count and output in counter_value
                counter_value.innerText = (count + inc).toFixed(0);
                // Call function every ms
                setTimeout(updateCount, 1);
            } else {
                counter_value.innerText = target;
            }
        };

        updateCount();
    });
} catch (err) {

}

//=========================================//
/*/*            04) Gallery filter js      */
//=========================================//
try {
    var Shuffle = window.Shuffle;

    class Demo {
        constructor(element) {
            if(element){
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
            }
        }

        /**
         * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
         * for them like you normally would (with jQuery for example).
         */
        addShuffleEventListeners() {
            this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                console.log('layout. data:', data);
            });
            this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                console.log('removed. data:', data);
            });
        }

        addFilterButtons() {
            const options = document.querySelector('.filter-options');
            if (!options) {
                return;
            }

            const filterButtons = Array.from(options.children);
            const onClick = this._handleFilterClick.bind(this);
            filterButtons.forEach((button) => {
                button.addEventListener('click', onClick, false);
            });
        }

        _handleFilterClick(evt) {
            const btn = evt.currentTarget;
            const isActive = btn.classList.contains('active');
            const btnGroup = btn.getAttribute('data-group');

            this._removeActiveClassFromChildren(btn.parentNode);

            let filterGroup;
            if (isActive) {
                btn.classList.remove('active');
                filterGroup = Shuffle.ALL_ITEMS;
            } else {
                btn.classList.add('active');
                filterGroup = btnGroup;
            }

            this.shuffle.filter(filterGroup);
        }

        _removeActiveClassFromChildren(parent) {
            const { children } = parent;
            for (let i = children.length - 1; i >= 0; i--) {
                children[i].classList.remove('active');
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        window.demo = new Demo(document.getElementById('grid'));
    });
} catch (err) {

}

//=========================================//
/*/*            05) Tobii lightbox         */
//=========================================//

try {
    const tobii = new Tobii()
} catch (err) {

}

//=========================================//
/*/*            06) Back Button            */
//=========================================//
document.getElementsByClassName("back-button")[0]?.addEventListener("click", (e)=>{
    if (document.referrer !== "") {
        e.preventDefault();
        window.location.href = document.referrer;
      }
})

  

//=========================================//
/*            07) Components               */
//=========================================//

//********* 1) Modals ********//
try {
    const Default = {
        placement: 'center',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
        onHide: () => {},
        onShow: () => {},
        onToggle: () => {}
    }
    class Modal {
        constructor(targetEl = null, options = {}) {
            this._targetEl = targetEl
            this._options = { ...Default, ...options }
            this._isHidden = true
            this._init()
        }
    
        _init() {
            this._getPlacementClasses().map(c => {
                this._targetEl.classList.add(c)
            })
        }
    
        _createBackdrop() {
            if(this._isHidden) {
                const backdropEl = document.createElement('div');
                backdropEl.setAttribute('modal-backdrop', '');
                backdropEl.classList.add(...this._options.backdropClasses.split(" "));
                document.querySelector('body').append(backdropEl);
            }
        }
    
        _destroyBackdropEl() {
            if (!this._isHidden) {
                document.querySelector('[modal-backdrop]').remove();
            }
        }
    
        _getPlacementClasses() {
            switch (this._options.placement) {
    
                // top
                case 'top-left':
                    return ['justify-start', 'items-start']
                case 'top-center':
                    return ['justify-center', 'items-start']
                case 'top-right':
                    return ['justify-end', 'items-start']
    
                // center
                case 'center-left':
                    return ['justify-start', 'items-center']
                case 'center':
                    return ['justify-center', 'items-center']
                case 'center-right':
                    return ['justify-end', 'items-center']
    
                // bottom
                case 'bottom-left':
                    return ['justify-start', 'items-end']
                case 'bottom-center':
                    return ['justify-center', 'items-end']
                case 'bottom-right':
                    return ['justify-end', 'items-end']
    
                default:
                    return ['justify-center', 'items-center']
            }
        }
    
        toggle() {
            if (this._isHidden) {
                this.show()
            } else {
                this.hide()
            }
    
            // callback function
            this._options.onToggle(this)
        }
    
        show() {
            this._targetEl.classList.add('flex')
            this._targetEl.classList.remove('hidden')
            this._targetEl.setAttribute('aria-modal', 'true')
            this._targetEl.setAttribute('role', 'dialog')
            this._targetEl.removeAttribute('aria-hidden')
            this._createBackdrop()
            this._isHidden = false
    
            // callback function
            this._options.onShow(this)
        }
    
        hide() {
            this._targetEl.classList.add('hidden')
            this._targetEl.classList.remove('flex')
            this._targetEl.setAttribute('aria-hidden', 'true')
            this._targetEl.removeAttribute('aria-modal')
            this._targetEl.removeAttribute('role')
            this._destroyBackdropEl()
            this._isHidden = true
    
            // callback function
            this._options.onHide(this)
        }
    
    }
    
    window.Modal = Modal;
    
    const getModalInstance = (id, instances) => {
        if (instances.some(modalInstance => modalInstance.id === id)) {
            return instances.find(modalInstance => modalInstance.id === id)
        }
        return false
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        let modalInstances = []
        document.querySelectorAll('[data-modal-toggle]').forEach(el => {
            const modalId = el.getAttribute('data-modal-toggle');
            const modalEl = document.getElementById(modalId);
            const placement = modalEl.getAttribute('data-modal-placement')
    
            if (modalEl) {
                if (!modalEl.hasAttribute('aria-hidden') && !modalEl.hasAttribute('aria-modal')) {
                    modalEl.setAttribute('aria-hidden', 'true');
                }
            }
    
            let modal = null
            if (getModalInstance(modalId, modalInstances)) {
                modal = getModalInstance(modalId, modalInstances)
                modal = modal.object
            } else {
                modal = new Modal(modalEl, {
                    placement: placement ? placement : Default.placement
                })
                modalInstances.push({
                    id: modalId,
                    object: modal
                })
            }
    
            el.addEventListener('click', () => {
                modal.toggle()
            })
        })
    })
} catch (error) {
    
}

//********2) Accordions********/
try {
    const Default = {
        alwaysOpen: false,
        activeClasses: 'bg-gray-50 dark:bg-slate-800 text-green-600',
        inactiveClasses: 'text-dark dark:text-white',
        onOpen: () => { },
        onClose: () => { },
        onToggle: () => { }
    }
    
    class Accordion {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // show accordion item based on click
                this._items.map(item => {
    
                    if (item.active) {
                        this.open(item.id)
                    }
    
                    item.triggerEl.addEventListener('click', () => {
                        this.toggle(item.id)
                    })
                })
            }
        }
    
        getItem(id) {
            return this._items.filter(item => item.id === id)[0]
        }
    
        open(id) {
            const item = this.getItem(id)
    
            // don't hide other accordions if always open
            if (!this._options.alwaysOpen) {
                this._items.map(i => {
                    if (i !== item) {
                        i.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
                        i.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
                        i.targetEl.classList.add('hidden')
                        i.triggerEl.setAttribute('aria-expanded', false)
                        i.active = false
    
                        // rotate icon if set
                        if (i.iconEl) {
                            i.iconEl.classList.remove('rotate-180')
                        }
                    }
                })
            }
    
            // show active item
            item.triggerEl.classList.add(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "))
            item.triggerEl.setAttribute('aria-expanded', true)
            item.targetEl.classList.remove('hidden')
            item.active = true
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.add('rotate-180')
            }
    
            // callback function
            this._options.onOpen(this, item)
        }
    
        toggle(id) {
            const item = this.getItem(id)
    
            if (item.active) {
                this.close(id)
            } else {
                this.open(id)
            }
    
            // callback function
            this._options.onToggle(this, item)
        }
    
        close(id) {
            const item = this.getItem(id)
    
            item.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
            item.targetEl.classList.add('hidden')
            item.triggerEl.setAttribute('aria-expanded', false)
            item.active = false
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.remove('rotate-180')
            }
    
            // callback function
            this._options.onClose(this, item)
        }
    
    }
    
    window.Accordion = Accordion;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-accordion]').forEach(accordionEl => {
    
            const alwaysOpen = accordionEl.getAttribute('data-accordion')
            const activeClasses = accordionEl.getAttribute('data-active-classes')
            const inactiveClasses = accordionEl.getAttribute('data-inactive-classes')
    
            const items = []
            accordionEl.querySelectorAll('[data-accordion-target]').forEach(el => {
                const item = {
                    id: el.getAttribute('data-accordion-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-accordion-target')),
                    iconEl: el.querySelector('[data-accordion-icon]'),
                    active: el.getAttribute('aria-expanded') === 'true' ? true : false
                }
                items.push(item)
            })
    
            new Accordion(items, {
                alwaysOpen: alwaysOpen === 'open' ? true : false,
                activeClasses: activeClasses ? activeClasses : Default.activeClasses,
                inactiveClasses: inactiveClasses ? inactiveClasses : Default.inactiveClasses
            })
        })
    })
} catch (error) {
    
}

//=========================================//
/*            08) Upload Profile           */
//=========================================//
try {
    var loadFile = function (event) {
        
        var image = document.getElementById(event.target.name);
        image.src = URL.createObjectURL(event.target.files[0]);
    };
      
} catch (error) {
    
}

//=========================================//
/*            09) Custom Dropdown          */
//=========================================//
document.querySelectorAll(".dropdown").forEach(function (item) {
    item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
        subitem.addEventListener("click", function (event) {
            subitem.classList.toggle("block");
            if (subitem.classList.contains("block") != true) {
                item.querySelector(".dropdown-menu").classList.remove("block")
                item.querySelector(".dropdown-menu").classList.add("hidden")
            } else {
                dismissDropdownMenu()
                item.querySelector(".dropdown-menu").classList.add("block")
                item.querySelector(".dropdown-menu").classList.remove("hidden")
                if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                    subitem.classList.add("block")
                } else {
                    subitem.classList.remove("block")
                }
                event.stopPropagation();
            }
        });
    });
  });
  
  function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.remove("block")
        item.classList.add("hidden")
    });
    document.querySelectorAll(".dropdown-toggle").forEach(function (item) {
        item.classList.remove("block")
    });
  }
  
  window.addEventListener('click', function (e) {
    dismissDropdownMenu();
  });

//=========================================//
/*            10) Apex Chart               */
//=========================================//
try {
    var options = {
        chart: {
            height: 360,
            type: 'area',
            width: '100%',
            stacked: true,
            toolbar: {
                show: false,
                autoSelected: 'zoom'
            },
        },
        colors: ['#94a3b8', '#16a34a'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: [1.5, 1.5],
            dashArray: [0, 4],
            lineCap: 'round',
        },
        grid: {
            padding: {
            left: 0,
            right: 0
            },
            strokeDashArray: 3,
        },
        markers: {
            size: 0,
            hover: {
            size: 0
            }
        },
        series: [{
            name: 'No. of Sales',
            data: [0, 100, 40, 110, 60, 140, 55, 130, 65, 180, 75, 115],
        }, {
            name: 'Revenue',
            data: [0, 45, 10, 75, 35, 94, 40, 115, 30, 105, 65, 110],
        }],
        xaxis: {
            type: 'month',
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            axisBorder: {
                show: true,
            },  
            axisTicks: {
                show: true,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
            shadeIntensity: .8,
            opacityFrom: 0.3,
            opacityTo: 0.2,
            stops: [0, 80, 100]
            }
        },
        
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
        legend: {
            position: 'bottom',
            offsetY: 0,
        },
    }
    
    var chart = new ApexCharts(
        document.querySelector("#mainchart"),
        options
    );
    
    chart.render();
} catch (error) {

}