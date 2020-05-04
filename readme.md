# UFIS-BNB Programming Project Instructions #

>Please read all instructions carefully before starting this project!

### Overview ###

The objective of this project is to create the beginnings of a basic property rental web application (think <a href="www.airbnb.com">Airbnb</a>). We have provided you with a skeleton Laravel application and some dummy rental property records. Your goal is to complete the tasks from the tasklist below. 

We will use this project as a way to analyze your frontend, backend, and database skills. 

### Tasks ###

*[x] Display all properties from the `Property` table on the homepage as links (this was done for you)
*[ ] Assign types to the properties
     * [ ] Properties with IDs 1 and 2 should have type: "House"
     * [ ] Properties with IDS 3 and 4 should have type: "Apartment"
     * [ ] Property with ID 5 should have type: "Cabin"
*[ ] Create fake reviews for some (or all) of the properties. Reviews should include a numeric rating from 1-5 (required) as well as a comment (optional). **HINT: Is a new table needed for this?**
*[ ] Route each link from the homepage to a separate page containing details for each of the properties. The property pages should include: the title of the property, its type, and its reviews.
*[ ] Allow users to filter all properties on the homepage by type.
*[ ] Allow users to sort all properties on the homepage by average rating.

### Setup ###

**Homestead Setup**
* It is highly recommended that you use <a href='https://laravel.com/docs/7.x/homestead'>Homestead</a> as your local Laravel development environment. This will ensure that your local environment has the required packages and dependencies.
* In your `Homestead.yaml` file, be sure to map a folder to the parent folder that contains the ufis-bnb folder, and map your site to the public folder of ufis-bnb. For example, if you cloned the ufis-bnb repo into a folder named `code` located at `~/code` path, your Homestead.yaml would want to include this:
    * ![Example](homestead_yaml.png?raw=true) 
         * Make sure that the string you map your site to (`homestead.test`, in this example) has been added to your hosts file.
* Remember to run `composer install` in the `ufis-bnb` folder
* After you are set-up, run `vagrant up` and `vagrant ssh` from your Homestead folder. Then run `php artisan migrate:fresh --seed` from inside the Vagrant VM after navigating into the `code/ufis-bnb` directory from the Vagrant virtual machine. 
* You should then be able to navigate to your site (`homestead.test` in our example) in your browser to see the homepage of the skeleton app we have provided.
                                                                                               
   
**Other Setup**
* Homestead is not necessary to run a local Laravel app, however, if you decide not to use Homestead for your development, be sure to update your DB configurations in the `.env` file.
* After cloning/forking the repo, run `composer install` from the `ufis-bnb` directory as well as `php artisan migrate:fresh --seed`.
* You should now be able to navigate to the homepage of your local site from your browser to see the homepage of the skeleton app we have provided. 


### Guidelines and Notes ###

* Contact <a href="mailto:michelle.nguyen@utah.edu">Michelle Nguyen</a> if you have any set-up questions or concerns.
* You **will** need to modify existing tables as well as create new tables in order to fulfill the required tasks.
* Commit frequently! We are as interested in your workflow as your result. Make sure to include good commit messages.
* If you have more time and would like to show off, feel free to add more to your implementation (e.g. allowing current users to add reviews to properties, more sorting/filtering capabilities, descriptions/images for the properties, a fancy UI, etc.)
* Feel free to use internet resources to help you implement your solutions, but make sure all code is your own. We want to see how you are able to find and utilize available resources.
* You may spend a **maximum of 8 hours** (not including time spent for setup) on this! If you have not completed the tasks by the end of the 8 hours, submit what you have.


### Submission ###
When you have finished, email us a link to your public repository on GitHub or Bitbucket. Also, in the email, send us a short analysis answering these questions:
* If you had days instead of hours to implement this, how would you improve your solution?
* Do you have any enhancements that you want to suggest, or pre-emptively implement?
 
<sub>If you haven't set up a public repo, send us a `.zip` of your working copy.</sub>
