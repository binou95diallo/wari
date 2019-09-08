import { Component, OnInit, ViewChild } from '@angular/core';
import {Compte} from '../compte';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { DataService } from '../data.service';
import { MatTableDataSource, MatSort, MatPaginator } from '@angular/material';
import { Partenaire } from '../partenaire';

@Component({
  selector: 'app-compte',
  templateUrl: './compte.component.html',
  styleUrls: ['./compte.component.css']
})
export class CompteComponent implements OnInit {
  displayedColumns: string[] = [
    'numeroCompte','solde','partenaire','depot'];
  dataSource: MatTableDataSource<Compte>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  comptes: Compte[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }

  getCompte() {
    this.data.getCompte().subscribe(
     data => {this.comptes = data
    this.load(data);
    }, error => this.errorMessage = error,
    );
    console.log(this.comptes);
  }

 
  ngOnInit() {
    this.getCompte();
  }

  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

}
