<header>
        <nav>
            <div class="p-4 flex flex-row gap-10 justify-between text-xl ">
                <a href="./index.php" class="justify-left font-extrabold text-4xl flex" >
                    <div class="flex justify-center items-center px-2 ">
                        <img class="w-10 rounded-md" src="img/cslogo.png" alt="">
                    </div>
                    <div class="text-slate-800">CS2-foryou</div>
                </a>
                
                <div class="justify-right flex flex-row gap-20 px-10 items-center">
                    
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        
                        <a href="opencase.php">
                            <div class="font-bold bg-black text-white px-5 py-1 rounded-full hover:bg-gray-700 transition">
                                OPEN NOW
                            </div>
                        </a>
                        
                        <a href="./contacts.php" class="hover:text-gray-700 font-semibold hover:underline">Contacts</a>
                        <a href="./about.php" class="hover:text-gray-700 font-semibold hover:underline">About</a>
                        <a href="./faq.php" class="hover:text-gray-700 font-semibold hover:underline">FAQ</a>
                        
                        <div class="flex flex-row items-center gap-4 border-l-2 border-slate-300 pl-8 ml-4">
                            <div class="bg-green-100 border border-green-300 text-green-700 font-bold rounded-full py-1 px-3 shadow-sm">
                                $<?php echo number_format($_SESSION['balance'], 2); ?>
                            </div>
                            <div class="font-bold text-slate-800">
                                <?php echo htmlspecialchars($_SESSION['nickname']); ?>
                            </div>
                            <a href="logout.php" class="text-sm font-semibold text-red-500 hover:text-red-700 hover:underline ml-2">
                                Logout
                            </a>
                        </div>

                    <?php else: ?>
                        
                        <a href="opencase.php">
                            <div class="font-bold bg-black text-white px-5 py-1 rounded-full hover:bg-gray-700 hidden">
                                OPEN NOW
                            </div>
                        </a>
                        
                        <a href="./contacts.php" class="hover:text-gray-700 font-semibold hover:underline">Contacts</a>
                        <a href="./about.php" class="hover:text-gray-700 font-semibold hover:underline">About</a>
                        <a href="./faq.php" class="hover:text-gray-700 font-semibold hover:underline">FAQ</a>
                        
                        <div class="flex flex-row items-center gap-4">
                            <div class="bg-gray-200 rounded-full p-1 px-2 hidden">0.0$</div>
                            <a href="./login.php">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hover:cursor-pointer hover:scale-110">
                                    <path d="M12 2L3 7V17L12 22L21 17V7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                    <circle cx="12" cy="9" r="3" fill="currentColor"/>
                                    <path d="M7 18C7 15.5 9 14 12 14C15 14 17 15.5 17 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </a>  
                        </div>

                    <?php endif; ?>
                    
                </div>
            </div> 
        </nav>
    </header>