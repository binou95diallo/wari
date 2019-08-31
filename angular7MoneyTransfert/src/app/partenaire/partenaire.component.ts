import { Component, OnInit, ViewChild } from '@angular/core';
import {DataService} from '../data.service';
import {Partenaire} from '../partenaire';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';
@Component({
  selector: 'app-partenaire',
  templateUrl: './partenaire.component.html',
  styleUrls: ['./partenaire.component.css']
})
export class PartenaireComponent implements OnInit {
  displayedColumns: string[] = [
    'id','raisonSocial','nomComplet','ninea','telephone','adresse','email','status'];
  dataSource: MatTableDataSource<Partenaire>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  partenaires: Partenaire[] ;
     errorMessage: string;
     statut:string;
     ninea: string;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  }
  getPartenaire() {
    this.data.getPartenaire().subscribe(
     data => {this.partenaires = data
     this.load(data);
    }, error => this.errorMessage = error,
    );
    console.log(this.partenaires);
  }

  bloquerPartenaire(ninea){

    this.data.bloquerPartenaire(ninea)

  }

  ngOnInit() {
    this.getPartenaire();
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }
}
