import { Component, OnInit,ViewChild } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';
import {MatPaginator,MatSort,MatTableDataSource} from '@angular/material';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  displayedColumns: string[] = [
    'nomComplet','username','adresse','profil','status','photo'];
  dataSource: MatTableDataSource<User>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  users: User[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { 
  }

  getUser() {
    this.data.getUser().subscribe(
     data => {this.users = data
      this.load(data)
    }, error => this.errorMessage = error,
    );
    console.log(this.users);
    return this.users;
  }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  }
 
  ngOnInit() {
    this.getUser();
    
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }
}
