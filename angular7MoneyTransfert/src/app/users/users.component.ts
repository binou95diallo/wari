import { Component, OnInit,ViewChild } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';
import {MatPaginator,MatSort,MatTableDataSource} from '@angular/material';
import { Router } from '@angular/router';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  displayedColumns: string[] = [
    'nomComplet','username','adresse','profil','status','photo','id'];
  dataSource: MatTableDataSource<User>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  user: User[];
     errorMessage: string;
     statut:string;
  constructor(private data: DataService, private router:Router) { 
  }

  getUser() {
    this.data.getUser().subscribe(
     data => {this.user = data
      this.load(data)
    }, error => this.errorMessage = error,
    );
    console.log(this.user);
    return this.user;
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

  bloquerUser(row){

    this.data.bloquerUser(row.username).subscribe(
      data => {
        this.router.navigate(['/utilisateurs'])
     }, error => this.errorMessage = error,
     );
     window.location.reload();
  }
 
}
