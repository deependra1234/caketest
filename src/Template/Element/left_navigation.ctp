<aside class="bodylftCont nav-collapse collapse" id="sidebar">
    <div class="bodylfthdCont">
        Browse Admin Section
    </div>
    <div class="lftmenuCont">
        <ul id="menu">
            <li>
                <a href="#" class="firstChild"><div>Account Settings</div></a>
                <ul>
                    <li><?= $this->Html->link('<span>View Dashboard</span>', ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link('<span>Change Password</span>', ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'changePassword'], ['escape' => false]) ?></li>
                </ul>
            </li>
            <li>
                <a href="#" class="firstChild"><div>Manage Course Master</div></a>
                <ul>
                    <li><?= $this->Html->link('<span>Add New Course</span>', ['prefix' => 'admin', 'controller' => 'CourseMaster', 'action' => 'addCourse'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link('<span>List All Courses</span>', ['prefix' => 'admin', 'controller' => 'CourseMaster', 'action' => 'listCourse'], ['escape' => false]) ?></li>
<!--                    <li><?= $this->Html->link('<span>Add Course Fee Details</span>', ['prefix' => 'admin', 'controller' => 'CourseMaster', 'action' => 'listCourse'], ['escape' => false]) ?></li>-->

                </ul>
            </li>
            <li><a href="#" class="firstChild"><div>Students</div></a>
                <ul>
                    <li><?= $this->Html->link('<span>Pre-Register Request</span>', ['prefix' => 'admin', 'controller' => 'Student', 'action' => 'preRegisterRequest'], ['escape' => false]) ?></li>


                </ul>
            </li>
            <li><a href="#" class="firstChild"><div>Payment</div></a>
                <ul>
                    <li><?= $this->Html->link('<span>Payment History</span>', ['prefix' => 'admin', 'controller' => 'Payment', 'action' => 'paymentHistory'], ['escape' => false]) ?></li>


                </ul>
            </li>

        </ul>


    </div>
</aside>