# 🌍 Tom & Journey – Your Ultimate Travel Companion ✨🚀
Tom & Journey is a collaborative effort between Atibdee and me, resulting in a user-friendly travel planning website developed as part of our Software Developer coursework. Tailored for ease of use, this platform empowers users to effortlessly plan their trips with customizable filters for various points of interest. Once a route is selected, the site provides estimates for distance, time, and budget. Users can personalize their itineraries, zoom in/out on the map, and leverage OpenStreetMap's extensive data.

Our project also includes a thoughtfully designed admin panel, enabling seamless pin configuration with MongoDB integration for real-time database updates. Tom & Journey serves as a testament to our expertise in web development, database management, and user-centric design.

## Lessons Learned 🎓 

#### 🔄 Authentication Session 🔄
- 🔐 Ensuring a Secure User Experience by establishing trust and preventing unauthorized access.
- 🚷 Disallowing simultaneous logins from multiple locations
- 🚪 Providing a secure logout mechanism to effectively terminate user sessions.
- 🔑 Managing access levels and permissions (user role and admin role)
- 🌐 Maintaining user identity during their interactions with the platform

#### 🗃️ phpmyadmin database 🗃️
- 🛡️ Encrypting sensitive data utilizing md5.
- 🎨 Interface for database manipulation.
- 🚨 Implementing effective error handling mechanisms to promptly detect and address issues within the database.
- 🧑‍💻 Defining and enforcing appropriate permissions for database users to restrict access based on roles and responsibilities.
- 📋 Implementing proper data validation mechanisms to ensure the integrity and accuracy of information stored in the database.

#### 🗺️ Interactive Map 🗺️
- 🕒 Providing dynamic and real-time information on the interactive map.
- 🤗 Creating an intuitive and easy-to-use navigation system.
- 🍃 Utilizing Leaflet and OpenStreetMap for enhanced map functionality.

#### 📜 Website Programming 📜
- 🖥️ Designing websites that adapt to different devices for an optimal user experience.
- 🛠️ Structuring code in a modular way for easier maintenance and scalability.
- 🙋‍♂️ Implementing features that prioritize user needs and enhance usability.
- 🔄 Integrating code changes regularly to maintain a stable and up-to-date website.
- 🕵️ Implementing mechanisms to detect and handle errors, while maintaining logs for analysis.
- 🧰 Leveraging relevant programming tools like PHP, JS, CSS, and Bootstrap to streamline development processes.

## Screenshots 📷

### 
| **🏡✨ Home Page ✨🏡** |
|:--:| 
| ![](https://github.com/nshpam/TomAndJourney/assets/97942535/4b0d53f9-f889-40b9-a816-7eaf6883b113) |
|_When you click on the Tom&Journey website, this is the first page you will see._|

### 
| *🌈🚪 Login Page 🚪🌈* |
|:--:| 
![](https://github.com/nshpam/TomAndJourney/assets/97942535/eeae7137-bc5e-4784-9eeb-97dec47a4462)
|_We have implemented a system to distinguish between users and administrators. Additionally, we have implemented a session system that prevents others from logging into your account simultaneously. This system is also used for the logout functionality._|
| ![](https://github.com/nshpam/TomAndJourney/assets/97942535/af23d9e1-d5da-4ef8-8930-f37ca10160a7) |
| _If you login with the admin account, it will redirect you to the Admin Panel Page._ |

| *✍️📋 Register Page 📋✍️* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/8272f48c-8e8c-4301-b451-f029e730e0aa)
|_You must register before logging into Tom&Journey. If you register on the webpage, your role will be user. The only way to add an admin user is by accessing the database directly. The registered data will be stored in the database._|

###
| *👑📄 Profile Page 📄👑* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/0292ea8e-f196-4a66-984e-836930b19cf5) |
| _After logging in, you can access your profile through the navigation bar, where it will display your account details. On this page, you have the option to edit your email and password._ |

###
| *🗺️🚗 Trip Planner Page 🚗🗺️* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/01834793-a51b-4ee3-ab34-c558415d1dd7) |
| _Your trip planner will recommend a suitable trip for you, displaying the trip name, total distance, total travel time, and the number of places to visit. The time and distance are calculated using Leaflet and OpenStreetMap, open-source tools that provide an interactive map experience._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/37d692f1-c3be-41b6-804e-5c7fe8255551) |
| _If you're not currently logged in, an inviting modal will gracefully appear, suggesting that you log in for an enhanced experience._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/04fcc208-2b5c-4099-b1a3-6029469cf762) |
| _I've designed the trip planner page to include a map, map filters, pins, pin details, and automatic trip routing. You have the freedom to move the map as you wish, with the ability to zoom in and out. The filters consist of 10 categories, including points of interest for photography, hotels, gas stations, food establishments, metro/skytrain stations, museums, grocery stores, ports, cafes, and bars. Each filter can be toggled separately. The pins are added manually, and the routing system is provided by Leaflet._ |

###
| *💭🗨️ Modals 💭🗨️* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/020991c8-da34-40e6-8541-ad43c691214f)
| _This modal will appear when you have successfully logged into the system._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/437f75b5-a60f-41d9-ae77-7cfc3d8d1b95)
| _This modal will show up when you fail to log in to your system due to an unregistered account._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/e966229b-95e6-4a8c-bea8-257a1eec2707)
| _This modal will show up when you fail to log in to your system due to blank username and password input._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/0a7b9578-d2e2-466c-92b7-1871227e3166)
| _This modal will show up when you fail to log in to your system due to entering the wrong username or password._ |

###
| *🚀🌐 Admin Panel Page 🌐🚀* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/c2e5ce37-f0be-40ac-94c5-09c4f28d5957)
| _The dashboard will display shortcuts for each category._ |
![admin_1](https://github.com/nshpam/TomAndJourney/assets/97942535/74aebf0e-66b7-4a8b-896b-116befb0f847)
| _On this page, you can add, edit, or delete train pins._ |
![admin_2](https://github.com/nshpam/TomAndJourney/assets/97942535/953eacc3-96fc-4250-acc4-70c608acfdfd)
| _On this page, you can add, edit, or delete bar pins._ |
![admin_3](https://github.com/nshpam/TomAndJourney/assets/97942535/ea99997a-fdf6-416f-892b-82ac7b65f74c)
| _On this page, you can add, edit, or delete cafe pins._ |
![admin_4](https://github.com/nshpam/TomAndJourney/assets/97942535/b0b86384-ebfa-4a15-9835-b564d73989b3)
| _On this page, you can add, edit, or delete anchor pins._ |
![admin_5](https://github.com/nshpam/TomAndJourney/assets/97942535/53f92035-b49f-41b0-9d5f-f5f54cdd17c6)
| _On this page, you can add, edit, or delete market pins._ |
![admin_6](https://github.com/nshpam/TomAndJourney/assets/97942535/480fbfcb-f15a-4fbf-9691-5a01a0c72853)
| _On this page, you can add, edit, or delete food pins._ |
![admin_7](https://github.com/nshpam/TomAndJourney/assets/97942535/4db09062-279a-4308-bac5-e306ce4766ce)
| _On this page, you can add, edit, or delete pump pins._ |
![admin_9](https://github.com/nshpam/TomAndJourney/assets/97942535/faeaeccd-ce78-4a82-9989-4804f8d47114)
| _On this page, you can add, edit, or delete hotel pins._ |
![admin_10](https://github.com/nshpam/TomAndJourney/assets/97942535/88246756-4a28-450f-bf22-24b0c90c188e)
| _On this page, you can add, edit, or delete photo pins._ |
![admin_11](https://github.com/nshpam/TomAndJourney/assets/97942535/4efafe4f-e8f8-4761-86ae-bf9a5e0258ff)
| _On this page, you can add, edit, or delete museum pins._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/64bb9fcb-c603-487d-8716-3f689cee0524)
| _On this page, you can add, edit, or delete photo pins._ |
![](https://github.com/nshpam/TomAndJourney/assets/97942535/c4a1bb9d-ece9-48f1-9544-6d72ea39cc3c)
| _On this page, we've set the recommended trip for you. You can add, edit, or delete trip recommendations. Which will show on the first page of trip planner._ |

###
| *🌟✨ About Us Page 📜✨* |
|:--:|
![](https://github.com/nshpam/TomAndJourney/assets/97942535/acb10d73-50fb-4e46-8a8d-4b8a88105439) |
| _This page serves as the credit page for contributors._ |

## Contributor 👩‍💻👨‍💻
- [@nshpam](https://github.com/nshpam)
- [@Athibdee](https://github.com/Athibdee)
