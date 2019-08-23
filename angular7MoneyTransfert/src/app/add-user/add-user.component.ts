import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add-user',
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent implements OnInit {

  registerUserData = {};
  username:string;
  password:string;
  constructor(private  data: DataService,
              private _router: Router) { }

  ngOnInit() {
  }

  registerUser() {
    console.log(this.registerUserData);
   this.data.registerUser(this.registerUserData)
    .subscribe(
      res => {
        this._router.navigate(['/special'])
      },
      err => console.log(err)
    )   
  }


}
