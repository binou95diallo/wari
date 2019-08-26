import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {

  faEdit = faEdit;
  users: User[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  getUser() {
    this.data.getUser().subscribe(
     data => {this.users = data}, error => this.errorMessage = error,
    );
    console.log(this.users);
  }

  ngOnInit() {
    this.getUser();
  }

}
