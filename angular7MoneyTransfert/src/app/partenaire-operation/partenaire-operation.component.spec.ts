import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PartenaireOperationComponent } from './partenaire-operation.component';

describe('PartenaireOperationComponent', () => {
  let component: PartenaireOperationComponent;
  let fixture: ComponentFixture<PartenaireOperationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PartenaireOperationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PartenaireOperationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
